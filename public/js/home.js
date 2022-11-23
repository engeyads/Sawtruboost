

        const isMobile = navigator.userAgentData.mobile;


        const logotext = document.querySelector('.logotext');
        const subject = document.querySelector('.subject');
        const logo = document.querySelector('.Logo');
        const btn = document.getElementById('overlay')
        const navbar = document.querySelector('.mainmenu');
        const topmenus = document.querySelector('.topmenu')
        const menu = document.getElementById('toggle')

        let second = document.querySelector('.second');
        let third = document.querySelector('.third');
        let fourth = document.querySelector('.fourth');
        let fifth = document.querySelector('.fifth');
        //const scrollContainer = document.querySelector("main");
        //const social = document.querySelector('.sticky-icon');

        menu.addEventListener('click', function (e) {
            menu.classList.toggle('active')
            btn.classList.toggle('open');
        }, false)


        if (!isMobile) {
            if(second.length > 0){
                second = document.querySelector('.second').offsetTop;
                third = document.querySelector('.third').offsetTop;
                fourth = document.querySelector('.fourth').offsetTop;
                fifth = document.querySelector('.fifth').offsetTop;

            }





        window.onresize = () => {
            second = document.querySelector('.second').offsetTop;
            third = document.querySelector('.third').offsetTop;
            fourth = document.querySelector('.fourth').offsetTop;
            fifth = document.querySelector('.fifth').offsetTop;
        };

        window.onscroll = () => {
            if (window.scrollY > 300) {
                navbar.classList.add('nav-active');
            }
            if (window.scrollY < 300) {
                navbar.classList.remove('nav-active');
            }

            if (window.scrollY >= second - navbar.clientHeight) {

                logo.style.filter = 'grayscale(0) brightness(100%)';
                logotext.style.display = 'block';
                subject.style.display = 'none';
                subject.textContent = "";
            }
            if (window.scrollY >= third - navbar.clientHeight) {
                logo.style.filter = 'grayscale(100%) brightness(50%)';
                logotext.style.display = 'none';
                subject.style.display = 'block';
                subject.textContent = "OUR MAGICAL BOOSTS";
            }
            if (window.scrollY >= fourth - navbar.clientHeight) {
                subject.textContent = "Our Clients";
            }
            if (window.scrollY >= fifth - navbar.clientHeight) {
                subject.textContent = "LATEST INSIGHTS";
            }
        };

        if (window.scrollY > 300) {
            navbar.classList.add('nav-active');

        }
        if (window.scrollY < 300) {
            navbar.classList.remove('nav-active');

        }

        function mouseOver() {
            document.querySelector('.overlay ul li:nth-of-type(3)').style = 'transition: all 0.35s ease;margin-top:30px';
            document.querySelector('.overlay ul li:nth-of-type(4)').style = 'transition: all 0.35s ease;margin-top:30px';
        }

        function mouseOut() {
            document.querySelector('.overlay ul li:nth-of-type(3)').style = 'transition: all 0.35s ease;margin:0';
            document.querySelector('.overlay ul li:nth-of-type(4)').style = 'transition: all 0.35s ease;margin:0';
        }

        topmenus.addEventListener("mouseover", mouseOver);
        topmenus.addEventListener("mouseout", mouseOut);
    }
    else {
        if(second.length > 0){
            second = document.querySelector('.second').offsetTop;
            third = document.querySelector('.third').offsetTop;
            fourth = document.querySelector('.fourth').offsetTop;
            fifth = document.querySelector('.fifth').offsetTop;

        }
        window.onscroll = () => {

            if (window.scrollY > 300) {
                navbar.classList.add('nav-active');

            }
            if (window.scrollY < 300) {
                navbar.classList.remove('nav-active');
            }

            if (window.scrollY >= second - navbar.clientHeight) {

                logo.style.display = 'block';
                logotext.style.display = 'block';
                subject.textContent = "";
            }
            if (window.scrollY >= third - navbar.clientHeight) {
                logo.style.display = 'none';
                logotext.style.display = 'none';
                subject.textContent = "OUR MAGICAL BOOSTS";
            }
            if (window.scrollY >= fourth - navbar.clientHeight) {
                subject.textContent = "Our Clients";
            }
            if (window.scrollY >= fifth - navbar.clientHeight) {
                subject.textContent = "LATEST INSIGHTS";
            }
        };

        function mouseOver() {
            document.querySelector('.overlay ul li:nth-of-type(3)').style = 'transition: all 0.35s ease;margin-top:30px';
            document.querySelector('.overlay ul li:nth-of-type(4)').style = 'transition: all 0.35s ease;margin-top:30px';
            document.querySelector('.overlay ul li:nth-of-type(5)').style = 'transition: all 0.35s ease;margin-top:30px';
            document.querySelector('.overlay ul li:nth-of-type(6)').style = 'transition: all 0.35s ease;margin-top:30px';
        }

        function mouseOut() {
            document.querySelector('.overlay ul li:nth-of-type(3)').style = 'transition: all 0.35s ease;margin:0';
            document.querySelector('.overlay ul li:nth-of-type(4)').style = 'transition: all 0.35s ease;margin:0';
            document.querySelector('.overlay ul li:nth-of-type(5)').style = 'transition: all 0.35s ease;margin:0';
            document.querySelector('.overlay ul li:nth-of-type(6)').style = 'transition: all 0.35s ease;margin:0';
        }

        topmenus.addEventListener("mouseover", mouseOver);
        topmenus.addEventListener("mouseout", mouseOut);
    }
