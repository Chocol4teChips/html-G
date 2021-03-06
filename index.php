<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebApp</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="container bg-dark ">
    <div class="container bg-secondary card border-1 border-white my-5 p-3">
        <div class="">
            <div class="text-center mt-4 mb-4">
                <img class="rounded-circle" src="data:image/jpeg;base64,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" alt="">
            </div>
            <div class="container text-center">
                <div class="container w-75">
                    <h2 class="text-center text-white mb-4"> Coffemaid </h2>
                    <form class="row g-3 needs-validation" novalidate>
                        <div class="mb-1">
                            <label for="validationCustom01" class="form-label text-white">UseName</label>
                            <input type="text" class="form-control id_User" id="validationCustom01" placeholder="usename"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="validationCustom02" class="form-label text-white">Password</label>
                            <input type="password" class="form-control" id="validationCustom02" placeholder="password"
                                min="6" text="2" required>
                            <div class="invalid-feedback">
                                <p class="fw-bold"> Wrong Username or Password </p>
                            </div>
                        </div>
                        <div>
                            <a href="#"> <button class="btn btn-primary rounded" style="width: 130px;">Login</button>
                            </a>
                        </div>
                    </form>
                </div>
                <div class="mt-5">
                    <a class="btn btn-primary mx-2 rounded-pill" style="background-color: #3b5998; width: 130px; "
                        href="#!" role="button"><i class="fab fa-facebook-f me-2"></i>facebook</a>
                    <a class="btn btn-primary mx-2 rounded-pill"
                        style="background-color: rgb(37, 211, 102); width: 130px;" href="#!" role="button"><i
                            class="fab fa-line me-2"></i>line</a>
                </div>
                <div class="mt-3">
                    <a class="btn btn-primary rounded-pill" style="background-color: #dd4b39; width: 130px;" href="#!"
                        role="button"><i class="fab fa-google me-2"></i>Gmail</a>
                </div>
                <div class="my-4">
                    <a href="app_register.html" class="text-body text-decoration-none">
                        <h5 class="">Register</h5>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    function FirstLoad() {
        (function () {
            var forms = document.querySelectorAll('.needs-validation')
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity()) {
                            event.preventDefault()
                            var ID = $(".id_User").val();
                            if (ID== 1 ){
                                let count = 2;
                                let timerId = setInterval(() => {
                                    count--;
                                    console.log(count);
                                    if (count == 0) {
                                        location.href = "/app_addmin_1.html"
                                        clearInterval(timerId);
                                    }
                                }, 1000)
                                let timerInterval
                                Swal.fire({
                                    title: 'Coffemaid',
                                    html: '?????????????????????????????????????????????????????????????????????',
                                    color: 'rgb(255, 255, 255)',
                                    background: 'rgb(123, 128, 138) url(/images/trees.png)',
                                    border: 'rgb(0, 0, 0)',
                                    backdrop: ` rgb(163, 153, 140,0.9)`,
                                    timer: 2000,
                                    timerProgressBar: true,
                                    didOpen: () => {
                                        Swal.showLoading()
                                        const b = Swal.getHtmlContainer().querySelector('b')
                                        timerInterval = setInterval(() => {
                                            b.textContent = Swal.getTimerLeft()
                                        }, 1000)
                                    },
                                    willClose: () => {
                                        clearInterval(timerInterval)
                                    }
                                }).then((result) => {
                                    if (result.dismiss === Swal.DismissReason.timer) {
                                    }
                                })
                            }
                            else{
                                let count = 2;
                            let timerId = setInterval(() => {
                                count--;
                                console.log(count);
                                if (count == 0) {
                                    location.href = "/app_home.html"
                                    clearInterval(timerId);
                                }
                            }, 1000)
                            let timerInterval
                            Swal.fire({
                                title: 'Coffemaid',
                                html: '?????????????????????????????????????????????????????????????????????',
                                color: 'rgb(255, 255, 255)',
                                background: 'rgb(123, 128, 138) url(/images/trees.png)',
                                border: 'rgb(0, 0, 0)',
                                backdrop: ` rgb(163, 153, 140,0.9)`,
                                timer: 2000,
                                timerProgressBar: true,
                                didOpen: () => {
                                    Swal.showLoading()
                                    const b = Swal.getHtmlContainer().querySelector('b')
                                    timerInterval = setInterval(() => {
                                        b.textContent = Swal.getTimerLeft()
                                    }, 1000)
                                },
                                willClose: () => {
                                    clearInterval(timerInterval)
                                }
                            }).then((result) => {
                                if (result.dismiss === Swal.DismissReason.timer) {
                                }
                            })
                            }
                            
                        }
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                            console.log(form);
                        }
                        form.classList.add('was-validated')
                    }, false)
                })
        })()

    }

    $(() => {
        FirstLoad();
    })


</script>
</html>