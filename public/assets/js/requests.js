$(document).ready(function () {
    $("#registerForm1").submit(processReg);
    $("#loginForm1").submit(processLoginForm);
});

function processRegisterForm(event) {
    $form = $(this);
    $button = $("#main_btn");
    console.log($button);
    $("#checkerror").html("");

    if ($("#check").prop("checked") == true) {
        $button.html("Processing...");
        return true;
    } else {
        event.preventDefault();
        $("#checkerror").html("Please check the notice");
    }
}

function processLoginForm(event) {
    event.preventDefault();
    $form = $(this);
    $button = $("#main_btn");
    console.log($button);
    $button.html("Processing...");
    return true;
}

function processReg(e) {
    e.preventDefault();
   

    const $fullname = $(".fullname").val();
    const $email = $("#exampleInputEmail1").val();
    const $password = $("#exampleInputPassword1").val();

    const $button = $(this);
    $button1 = $("#main_btn");
    const $data = {
        fullname: $fullname,
        email: $email,
        password: $password,
    };

    console.log($data);

    if ($fullname.length == 0 || $email.length == 0 || $password == 0) {
        swal({
            text: "incomplete registration",
            icon: "error",
            buttons: true,
        });
        return false;
    }

    swal({
        text: "Are you sure you agree to our terms and conditions",
        icon: "info",
        buttons: true,
    }).then(($res) => {
        if ($res == true) {
            $button1.html("Processing...");
            $.ajax({
                url: $button.data("url"),
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                data: $data,
                success: function ($response) {
                    if ($response.success) {
                        swal({
                            text: $response.message,
                            icon: "success",
                            buttons: true,
                        }).then((res) => {
                            location.reload();
                        });
                    } else if ($response.error) {
                        swal({
                            text: $response.message,
                            icon: "error",
                            buttons: true,
                        }).then((res) => {
                            location.reload();
                        });
                    }
                },
            });
        }
    });
}
