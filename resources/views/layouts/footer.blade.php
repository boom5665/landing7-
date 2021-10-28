<div>

<footer>
    <div class="">
        สมัครสมาชิก | เข้าแทงหวย | ตรวจเช็ครางวัลหวย | โปรโมชั่น | ติดต่อเรา
        <div class="">Copyright © 2020 AMB-lotto.com All right reserved.
        </div>
    </div>
    {{-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        // AOS.init({
        //     duration: 1200,
        // });
        // $('a').click(function() {
        //     Swal.fire({
        //         icon: 'error',
        //         title: 'สำหรับเข้าชมเท่านั้น',
        //         // footer: '<a href="">Why do I have this issue?</a>'
        //     })
        //     // .then(function() {
        //     //     setTimeout(function() {
        //     //         window.location.href = "http://127.0.0.1:8000/landing2"
        //     //     }, 1000);
        //     // });
        // });

        function toggleSeeMore() {
            if (document.getElementById("textarea").style.display == 'none') {
                document.getElementById("textarea").style.display = 'flex';
                document.getElementById("seeMore").innerHTML = 'ดูน้อยลง';
            } else {
                document.getElementById("textarea").style.display = 'none';
                document.getElementById("seeMore").innerHTML = 'ดูเพิ่มเติม';
            }
        }

        var navItems = document.querySelectorAll(".mobile-bottom-nav__item");
        navItems.forEach(function(e, i) {
            e.addEventListener("click", function(e) {
                navItems.forEach(function(e2, i2) {
                    e2.classList.remove("mobile-bottom-nav__item--active");
                })
                this.classList.add("mobile-bottom-nav__item--active");
            });
        });
    </script>
</footer>
</div>
