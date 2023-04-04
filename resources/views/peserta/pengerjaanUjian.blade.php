<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Codebase - Bootstrap 4 Admin Template &amp; UI Framework</title>

        <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="Codebase">
        <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="/codebase/media/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="/codebase/media/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/codebase/media/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="/codebase/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
        <link rel="stylesheet" href="/codebase/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
        <link rel="stylesheet" href="/codebase/js/plugins/select2/css/select2.min.css">
        <link rel="stylesheet" href="/codebase/js/plugins/jquery-tags-input/jquery.tagsinput.min.css">
        <link rel="stylesheet" href="/codebase/js/plugins/jquery-auto-complete/jquery.auto-complete.min.css">
        <link rel="stylesheet" href="/codebase/js/plugins/ion-rangeslider/css/ion.rangeSlider.css">
        <link rel="stylesheet" href="/codebase/js/plugins/dropzonejs/dist/dropzone.css">
        <link rel="stylesheet" href="/codebase/js/plugins/flatpickr/flatpickr.min.css">
        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="/codebase/js/plugins/slick/slick.css">
        <link rel="stylesheet" href="/codebase/js/plugins/slick/slick-theme.css">
        <link rel="stylesheet" href="/codebase/js/plugins/datatables/dataTables.bootstrap4.css">

        <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.4/index.global.min.js'></script>

        <!-- Fonts and Codebase framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700&display=swap">
        <link rel="stylesheet" id="css-main" href="/codebase/css/codebase.min.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="/codebase/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>
        <!-- Main Container -->
        <main id="main-container">

            <!-- Page Content -->
            <div class="content">
                <div class="block">
                    <div class="block-header block-header-default">
                        <!-- Pop Out Modal -->
                        <div class="block">
                                <button type="button" class="btn btn-alt-danger" data-toggle="modal" data-target="#instruksi-pengerjaan">Instruksi Pengerjaan!</button>
                        </div>
                        <!-- END Pop Out Modal -->
                        <!-- Pop Out Modal -->
                        <div class="modal fade" id="instruksi-pengerjaan" tabindex="-1" role="dialog" aria-labelledby="modal-popout" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-popout" role="document">
                                <div class="modal-content">
                                    <div class="block block-themed block-transparent mb-0">
                                        <div class="block-header bg-primary-dark">
                                            <h3 class="block-title">Instruksi Pengerjaan</h3>
                                        </div>
                                        <div class="block-content">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc a posuere velit. Ut id augue eget ex pulvinar ullamcorper eget ac risus. Aliquam mollis nisl ac justo tempus, ac lobortis quam lobortis. Morbi sit amet ipsum et nulla imperdiet aliquet in in mauris. Vestibulum quis lectus tincidunt, mollis sem eget, ultrices ante. Nulla vitae magna et ex tincidunt tempor.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Pop Out Modal -->
                        <div class="col-6 col-md-4 col-xl-2">
                            <a class="block block-link-pop text-center" href="javascript:void(0)">
                                <div class="block-content">
                                    <p class="font-size-h5 text-earth" id="waktu-tersisa">
                                        <!-- <strong>987&euro;</strong> -->
                                    </p>
                                </div>
                                <div class="content bg-body-light ">
                                    <p class="font-w400">
                                        <i class="fa fa-clock-o text-muted mr-5"></i> Waktu Tersisa
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="block-content">
                        <!-- Bootstrap Forms Validation -->
                        <div class="row justify-content-center py-20">
                            <div class="col-xl-6">
                                <!-- jQuery Validation functionality is initialized in js/pages/be_forms_validation.min.js which was auto compiled from _es6/pages/be_forms_validation.js -->
                                <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                <form class="js-validation-bootstrap" action="be_forms_validation.html" method="post">
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-username">Token <span class="text-danger">*</span></label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Masukkan Token">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-8 ml-auto">
                                            <button type="submit" class="btn btn-alt-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="form-group row">
                                    <div class="col-lg-8 ml-auto">
                                        <a href="{{ url('/dashboardPeserta') }}"><button class="btn btn-alt-danger">Kembali Ke Halaman Peserta</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Bootstrap Forms Validation -->
                    </div>
                </div>
            </div>
            <!-- END Page Content -->

        </main>
        <!-- END Main Container -->
<!--
            Codebase JS Core

            Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
            to handle those dependencies through webpack. Please check out /codebase/_es6/main/bootstrap.js for more info.

            If you like, you could also include them separately directly from the /codebase/js/core folder in the following
            order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

            /codebase/js/core/jquery.min.js
            /codebase/js/core/bootstrap.bundle.min.js
            /codebase/js/core/simplebar.min.js
            /codebase/js/core/jquery-scrollLock.min.js
            /codebase/js/core/jquery.appear.min.js
            /codebase/js/core/jquery.countTo.min.js
            /codebase/js/core/js.cookie.min.js
        -->
        <script src="/codebase/js/codebase.core.min.js"></script>

        <!--
            Codebase JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at /codebase/_es6/main/app.js
        -->
        <script src="/codebase/js/codebase.app.min.js"></script>

        <!-- Page JS Plugins -->
        <script src="/codebase/js/plugins/chartjs/Chart.bundle.min.js"></script>

        <!-- Page JS Code -->
        <script src="/codebase/js/pages/be_pages_dashboard.min.js"></script>
        <script src="/codebase/js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="/codebase/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="/codebase/js/pages/be_tables_datatables.min.js"></script>

        <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.js'></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
            integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script src="/codebase/js/plugins/pwstrength-bootstrap/pwstrength-bootstrap.min.js"></script>
        <script src="/codebase/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="/codebase/js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="/codebase/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
        <script src="/codebase/js/plugins/select2/js/select2.full.min.js"></script>
        <script src="/codebase/js/plugins/jquery-tags-input/jquery.tagsinput.min.js"></script>
        <script src="/codebase/js/plugins/jquery-auto-complete/jquery.auto-complete.min.js"></script>
        <script src="/codebase/js/plugins/masked-inputs/jquery.maskedinput.min.js"></script>
        <script src="/codebase/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
        <script src="/codebase/js/plugins/dropzonejs/dropzone.min.js"></script>
        <script src="/codebase/js/plugins/flatpickr/flatpickr.min.js"></script>

        <script src="/codebase/js/pages/be_forms_plugins.min.js"></script>
        
        <script src="/codebase/js/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="/codebase/js/plugins/moment/moment.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
        <script type="text/javascript">
 
            $('.show_confirm_delete').click(function(event) {
                var form =  $(this).closest("form");
                var name = $(this).data("name");
                event.preventDefault();
                swal({
                    title: `Apakah anda yakin ingin menghapus data ini ?`,
                    text: "Data yang sudah dihapus tidak bisa dikembalikan",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                    form.submit();
                    }
                });
            });

            $('.show_confirm_simpan').click(function(event) {
                var form =  $(this).closest("form");
                var name = $(this).data("name");
                event.preventDefault();
                swal({
                    title: `Apakah anda yakin ingin menyimpan data ini ?`,
                    text: "",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                    form.submit();
                    }
                });
            });
        </script>
        <script>
            // Set the date we're counting down to
            var countDownDate = new Date("Jan 5, 2024 15:37:25").getTime();

            // Update the count down every 1 second
            var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();
                
            // Find the distance between now and the count down date
            var distance = countDownDate - now;
                
            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                
            // Output the result in an element with id="demo"
            document.getElementById("waktu-tersisa").innerHTML = days + "d " + hours + "h "
            + minutes + "m " + seconds + "s ";
                
            // If the count down is over, write some text 
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
            }
            }, 1000);
            </script>
    </body>
</html>