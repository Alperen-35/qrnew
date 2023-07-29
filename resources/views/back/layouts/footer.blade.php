        <!-- Footer Section Start -->
        <script>
            function updateDate() {
                // Şu anki tarih bilgisini al
                const now = new Date();
                // Tarih değerlerini al
                const day = now.getDate();
                const month = now.getMonth() + 1; // JavaScript ayları 0'dan başlar, bu nedenle 1 ekleyerek gerçek aya dönüştürüyoruz
                const year = now.getFullYear();
                // Tarih değerlerini istenen formata çevir
                const formattedDate = `${day.toString().padStart(2, '0')}/${month.toString().padStart(2, '0')}/${year}`;
                // HTML içeriğini güncelle
                document.getElementById('tarihGoster').innerText = "Tarih: " + formattedDate;
            }
            // Tarihi başlat ve sayfa yüklendiğinde güncelle
            updateDate();
        </script>
        <script>
            var toastrShown = false;
        </script>
        <script>
            if (!toastrShown) {
                toastrShown = true;
                toastr.success('Mesajınız burada');
            }
        </script>
        </div>
        <script>
            $('.dropify').dropify({
                messages: {
                    'default': '<p style="font-size:12px;">Click or drag and drop a photo</p>'
                    , 'replace': 'Click or drag and drop to replace'
                    , 'remove': 'Remove'
                    , 'error': 'Error. The file is either not square, larger than 2 MB or not an acceptable file type'
                }
            });
        </script>
        <!-- JS============================================ -->
        <!-- Global Vendor, plugins & Activation JS -->
        <script src="{{ asset('back') }}/assets/js/vendor/modernizr-3.6.0.min.js"></script>
        <script src="{{ asset('back') }}/assets/js/vendor/jquery-3.3.1.min.js"></script>
        <script src="{{ asset('back') }}/assets/js/vendor/popper.min.js"></script>
        <script src="{{ asset('back') }}/assets/js/vendor/bootstrap.min.js"></script>
        <!--Plugins JS-->
        <script src="{{ asset('back') }}/assets/js/plugins/perfect-scrollbar.min.js"></script>
        <script src="{{ asset('back') }}/assets/js/plugins/tippy4.min.js.js"></script>
        <!--Main JS-->
        <script src="{{ asset('back') }}/assets/js/main.js"></script>
        <!-- Plugins & Activation JS For Only This Page -->
        <!--Moment-->
        <script src="{{ asset('back') }}/assets/js/plugins/moment/moment.min.js"></script>
        <!--Daterange Picker-->
        <script src="{{ asset('back') }}/assets/js/plugins/daterangepicker/daterangepicker.js"></script>
        <script src="{{ asset('back') }}/assets/js/plugins/daterangepicker/daterangepicker.active.js"></script>
        <!--Echarts-->
        <script src="{{ asset('back') }}/assets/js/plugins/chartjs/Chart.min.js"></script>
        <script src="{{ asset('back') }}/assets/js/plugins/chartjs/chartjs.active.js"></script>
        <!--VMap-->
        <script src="{{ asset('back') }}/assets/js/plugins/vmap/jquery.vmap.min.js"></script>
        <script src="{{ asset('back') }}/assets/js/plugins/vmap/maps/jquery.vmap.world.js"></script>
        <script src="{{ asset('back') }}/assets/js/plugins/vmap/maps/samples/jquery.vmap.sampledata.js"></script>
        <script src="{{ asset('back') }}/assets/js/plugins/vmap/vmap.active.js"></script>
        </body>
        </html>
