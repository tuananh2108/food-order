$(document).ready(function(){
    // Modal login
    let modal = `
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-register">
                        <div class="modal-header header-login-register">
                            <h3 class="" id="exampleModalLabel">Register</h3>
                            <h5 class="btn-login">Login</h5>
                        </div>
                        <div class="modal-body">
                            <form class="form-login-register" onsubmit="return false;">
                                <input type="text" id="register-name" class="form-control" placeholder="Your name">
                                <input type="text" id="register-contact" class="form-control" placeholder="Phone Number">
                                <input type="email" id="register-email" class="form-control" placeholder="Your email">
                                <input type="password" id="register-password" class="form-control" placeholder="Your password">
                                <input type="password" id="register-confirm" class="form-control" placeholder="Re-enter your password">
                                <div class="alert-message"></div>
                                <div class="group-btn">
                                    <button type="button" class="btn btn-back" data-bs-dismiss="modal" aria-label="Close">Back</button>
                                    <button type="submit" id="btn-register" class="btn btn-custom">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-login">
                        <div class="modal-header header-login-register">
                            <h3 class="" id="exampleModalLabel">Login</h3>
                            <h5 class="btn-register">Register</h5>
                        </div>
                        <div class="modal-body">
                            <form id="form-login" class="form-login-register" onsubmit="return false;">
                                <input type="email" id="login-email" class="form-control" placeholder="Your email" required>
                                <input type="password" id="login-password" class="form-control" placeholder="Your password" required>
                                <div class="alert-message"></div>
                                <div class="group-btn">
                                    <button type="button" class="btn btn-back" data-bs-dismiss="modal" aria-label="Close">Back</button>
                                    <input type="submit" value="Login" id="btn-login" class="btn btn-custom">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    `;

    $("body").append(modal);

    // Handle Action
    $(".btn-login").click(() => {
        $(".modal-register").css("display", "none");
        $(".alert-message").children().remove();
        $(".modal-login").css("display", "block");
    });

    $(".btn-register").click(() => {
        $(".modal-login").css("display", "none");
        $(".alert-message").children().remove();
        $(".modal-register").css("display", "block");
    });

    // Send login/register data by jquery ajax
    $("#btn-login").click(() => login_or_register(
        {
            "email": $("#login-email").val(),
            "password": $("#login-password").val()
        }, document.URL + 'login'
    ));

    $("#btn-register").click(() => login_or_register(
        {
            "name": $("#register-name").val(),
            "contact": $("#register-contact").val(),
            "email": $("#register-email").val(),
            "password": $("#register-password").val(),
            "confirm-password": $("#register-confirm").val(),
        },
        document.URL + 'register'
    ));

    function login_or_register(params = {}, url) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: url,
            data: {params: params},
            success: function (data) {
                if(data.code === 200) {
                    window.location.href = data.url;
                    if(data.message) {
                        $(".alert-message").append("<i class='alert-success'>"+ data.message +"</i>");
                    }
                }
                else {
                    $(".alert-message").append("<i class='alert-error'>"+ data.message +"</i>");
                }
            },
            error: function (data) {
                $(".alert-message").append("<i class='alert-error'>"+ data.message +"</i>");
            }
        });
    }
});
