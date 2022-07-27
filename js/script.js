
            var sideBarIsOpen = true;

            toggleBtn.addEventListener( 'click', (event) => {
                event.preventDefault();
               
                if(sideBarIsOpen){
                    dashboardSidebar.style.width = '10%';
                    dashboardSidebar.style.transition = '0.3s all';
                    dashboardContent.style.width = '90%';
                    dashboard_logo.style.fontSize = "60px";
                    imgUser.style.width = '60px';


                    menuIcons = document.getElementsByClassName('menuText');
                    for(var i=0; i < menuIcons.length; i++){
                        menuIcons[i].style.display = 'none';
                    }
 
                    document.getElementsByClassName('dashboardBar_menuList')[0].style.textAlign = 'center';
                    sideBarIsOpen = false;
                }else {
                    dashboardSidebar.style.width = '20%';
                    dashboardContent.style.width = '80%';
                    dashboard_logo.style.fontSize = "80px";
                    imgUser.style.width = '80px';

                    menuIcons = document.getElementsByClassName('menuText');
                    for(var i=0; i < menuIcons.length; i++){
                        menuIcons[i].style.display = 'inline-block';
                    }

                    document.getElementsByClassName('dashboardBar_menuList')[0].style.textAlign = 'left';
                    sideBarIsOpen = true;
                }
            });