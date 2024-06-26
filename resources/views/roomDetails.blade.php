<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <title>Room Details</title>
</head>
<body>
    <p class="slogan">
        We Make Your Feel Comfortable
    </p>
    <nav class="navBar">
         <svg class="navBar-burguer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path fill="#000000" d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"></path>
        </svg>
        <div class="navBar-logo">
            <a class="logoLink" href="/index.php">
                <div>
                    <p>H</p>
                </div>
                <div>
                    <p>HOTEL</p>
                    <p>MIRANDA</p>
                </div>
            </a>
        </div>
        <div class="navBar-menu">
            <p><a href="./about.php">About Us</a></p>
            <p><a href="./rooms.php">Rooms</a></p>
            <p><a href="./offers.php">Offers</a></p>
            <p><a href="./contact.php">Contact</a></p>
        </div>
        <div class="navBar-icons">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_29_1118)">
                        <path d="M16.2479 11.5229C17.1564 10.5107 17.7143 9.17786 17.7143 7.71429C17.7143 4.56357 15.1507 2 12 2C8.84929 2 6.28571 4.56357 6.28571 7.71429C6.28571 10.865 8.84929 13.4286 12 13.4286C13.1107 13.4286 14.145 13.105 15.0236 12.5543C18.1307 13.725 20.27 16.5686 20.5421 19.8571H3.45857C3.64357 17.6436 4.68214 15.5793 6.37143 14.1064C6.66929 13.8471 6.7 13.3964 6.44071 13.0986C6.18214 12.8014 5.73071 12.77 5.43286 13.0293C3.25071 14.9307 2 17.6793 2 20.5714C2 20.9664 2.32 21.2857 2.71429 21.2857H21.2857C21.6807 21.2857 22 20.9664 22 20.5714C22 16.6529 19.7286 13.1536 16.2479 11.5229ZM7.71429 7.71429C7.71429 5.35071 9.63643 3.42857 12 3.42857C14.3636 3.42857 16.2857 5.35071 16.2857 7.71429C16.2857 10.0779 14.3636 12 12 12C9.63643 12 7.71429 10.0779 7.71429 7.71429Z" fill="#111111"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_29_1118">
                            <rect width="24" height="24" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.8084 19.8179L16.3984 15.4078H16.3509C17.7102 13.8051 18.3971 11.7388 18.2679 9.64127C18.1388 7.54372 17.2035 5.57735 15.6579 4.15351C14.1122 2.72966 12.0759 1.95864 9.97477 2.00171C7.87368 2.04479 5.87064 2.89863 4.38464 4.38464C2.89863 5.87064 2.04479 7.87368 2.00171 9.97477C1.95864 12.0758 2.72966 14.1122 4.15351 15.6579C5.57735 17.2035 7.54372 18.1388 9.64127 18.2679C11.7388 18.3971 13.8051 17.7102 15.4078 16.3509C15.4078 16.3509 15.4078 16.3848 15.4078 16.3984L19.8179 20.8084C19.8809 20.872 19.956 20.9225 20.0386 20.9569C20.1213 20.9914 20.21 21.0091 20.2996 21.0091C20.3891 21.0091 20.4778 20.9914 20.5605 20.9569C20.6432 20.9225 20.7182 20.872 20.7813 20.8084C20.8508 20.7468 20.907 20.6716 20.9463 20.5874C20.9856 20.5033 21.0072 20.4119 21.0097 20.319C21.0123 20.2262 20.9957 20.1338 20.9611 20.0475C20.9265 19.9613 20.8745 19.8832 20.8084 19.8179ZM10.1496 16.9072C8.80775 16.9072 7.496 16.5093 6.38026 15.7638C5.26452 15.0183 4.3949 13.9586 3.88139 12.7189C3.36787 11.4792 3.23351 10.115 3.4953 8.79887C3.75709 7.48277 4.40327 6.27385 5.35213 5.32499C6.30099 4.37613 7.50991 3.72995 8.82601 3.46816C10.1421 3.20637 11.5063 3.34073 12.746 3.85425C13.9858 4.36777 15.0454 5.23738 15.7909 6.35312C16.5364 7.46886 16.9344 8.78061 16.9344 10.1225C16.9344 11.0135 16.7589 11.8957 16.4179 12.7189C16.0769 13.5421 15.5772 14.29 14.9472 14.92C14.3171 15.55 13.5692 16.0498 12.746 16.3908C11.9229 16.7317 11.0406 16.9072 10.1496 16.9072Z" fill="#111111"/>
                </svg> 
        </div>
    </nav>
    <header class="aboutHeader">
        <p>THE ULTIMATE LUXURY</p>
        <p>Room Details</p>
        <div class="header-options">
            <p>Home |</p>
            <p>Room</p>
        </div>
    </header>
    <section class="roomDetails">
        <p>Detailed Room</p>
        <p>{{$room->room_type}}</p>
        <p>${{$room->room_rate}}/Night</p>
        <img src="./src/images/luxuryDoubleBed.jpg"/>
    </section>
    <section class="availability">
        <h2>Book Now</h2>
        <form method="post">
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" id="first_name" placeholder="Your first name...">
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" id="last_name" placeholder="Your last name...">
            <label for="check_in">Check In</label>
            <input type="date" name="check_in" id="check_in">
            <label for="check_out">Check Out</label>
            <input type="date" name="check_out" id="check_out">
            <label for="special_request">Special Request</label>
            <textarea name="special_request" id="special_request" placeholder="Your message..."></textarea>
            <button type="submit">BOOK NOW</button>
        </form>
    </section>
    <section class="amenities">
        <h2>Amenities</h2>
        <div>
            <div class="amenities-list">
                <div>
                    <img src="../src/icons/airconditioner.png"/>
                    <p>Air Conditioner</p>
                </div>
                <div>
                    <img src="../src/icons/breakfast2.png"/>          
                    <p>Breakfast</p>
                </div>
                <div>
                    <img src="../src/icons/cleaning.png"/>   
                    <p>Cleaning</p>
                </div>
                <div>
                    <img src="../src/icons/grocery.png"/>
                    <p>Grocery</p>
                </div>
                <div>
                    <img src="../src/icons/shop.png"/>    
                    <p>Shop Near</p>
                </div>
                <div>
                    <img src="../src/icons/support.png"/>                     
                    <p>24/7 Online Support</p>
                </div>
                <div>
                    <img src="../src/icons/lock.png"/>  
                    <p>Smart Security</p>
                </div>
            </div>
            <div class="amenities-list">
                <div>
                    <img src="../src/icons/freewifi.png"/> 
                    <p>High Speed Wifi</p>
                </div>
                <div>
                    <img src="../src/icons/kitchen.png"/>                        
                    <p>Kitchen</p>
                </div>
                <div>
                    <img src="../src/icons/shower.png"/>                        
                    <p>Shower</p>
                </div>
                <div>
                    <img src="../src/icons/bed.png"/>    
                    <p>Single Bed</p>
                </div>
                <div>
                    <img src="../src/icons/towels.png"/> 
                    <p>Towels</p>
                </div>
                <div>
                    <img src="../src/icons/key.png"/> 
                    <p>Strong Locker</p>
                </div>
                <div>
                    <img src="../src/icons/expert.png"/>                    
                    <p>Expert Team</p>
                </div>
            </div>
        </div>
    </section>
    <section class="founder">
        <img src="./src/images/rosalinda.jpg"/>
        <button>
            <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14 1C14 1.25587 13.9023 1.51187 13.707 1.70687L5.70703 9.70687C5.5125 9.90312 5.25625 10 5 10C4.74375 10 4.48813 9.90234 4.29313 9.70703L0.293125 5.70703C0.0978125 5.5125 0 5.25625 0 5C0 4.42875 0.467188 4 1 4C1.25587 4 1.51188 4.09766 1.70688 4.29297L5 7.5875L12.2937 0.29375C12.4875 0.0978125 12.7437 0 13 0C13.5344 0 14 0.428125 14 1Z" fill="white"/>
            </svg>       
        </button>
        <p>Rosalina D. William</p>
        <p class="founder-carreer">FOUNDER, QUX CO.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
    </section>
    <section class="cancellationTerms">
        <h2>Cancellation</h2>
        <p>Phasellus volutpat neque a tellus venenatis, a euismod augue facilisis. Fusce ut metus mattis, consequat metus nec, luctus lectus. Pellentesque orci quis hendrerit sed eu dolor. Cancel up to 14 days to get a full refund.</p>
    </section>
    <section class="relatedRooms">
        <h2>Related Rooms</h2>
        <div class="roomList-container">
            <img src="./src/images/room3.jpg"/>
            <div class="roomList-icons">
                <img src="../src/icons/bedIcon.png"/>
                <img src="../src/icons/wifIcon.png"/>
                <img src="../src/icons/carIcon.png"/>  
                <img src="../src/icons/flake.png"/>    
                <img src="../src/icons/gym.png"/>    
                <img src="../src/icons/nosmoke.png"/>    
                <img src="../src/icons/cocktail.png"/> 
            </div>
            <p>Minimal Duplex Room</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
            <div class="roomList-bookNow roomList-bookNow--rooms">
                <p>$345/Night</p>
                <p>Booking Now</p>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="footer-hotel">
            <div class="footer-head">
                <p class="footer-head-logo">H</p>
                <div class="footer-head-text">
                    <p>HOTEL</p>
                    <p>MIRANDA</p>
                </div>
            </div>
            <p class="footer-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doing eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat ion ullamco laboris nisi.</p>
            <div class="footer-icons">
                <svg class="footer__icons__single" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_54_1197)">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M21.0678 0C22.6861 0 24 1.31391 24 2.93222V21.0678C24 22.6861 22.6861 24 21.0678 24H16.0771V14.9571H19.199L19.793 11.0843H16.0771V8.57095C16.0771 7.51144 16.5961 6.47864 18.2605 6.47864H19.95V3.18145C19.95 3.18145 18.4167 2.9198 16.9508 2.9198C13.8905 2.9198 11.8902 4.77459 11.8902 8.13248V11.0843H8.48836V14.9571H11.8902V24H2.93222C1.31391 24 0 22.6861 0 21.0678V2.93222C0 1.31391 1.31386 0 2.93222 0H21.0678V0Z" fill="#777777"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_54_1197">
                            <rect width="24" height="24" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                <svg class="footer__icons__single" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_54_1199)">
                        <path d="M21 24H3C1.344 24 0 22.656 0 21V3C0 1.344 1.344 0 3 0H21C22.656 0 24 1.344 24 3V21C24 22.656 22.656 24 21 24ZM9.216 18.096C14.874 18.096 17.97 13.404 17.97 9.342C17.97 9.21 17.97 9.078 17.964 8.946C18.564 8.514 19.086 7.968 19.5 7.35C18.948 7.596 18.354 7.758 17.73 7.836C18.366 7.458 18.852 6.852 19.086 6.132C18.492 6.486 17.832 6.738 17.13 6.876C16.566 6.276 15.768 5.904 14.886 5.904C13.188 5.904 11.808 7.284 11.808 8.982C11.808 9.222 11.838 9.456 11.886 9.684C9.33 9.558 7.062 8.328 5.544 6.468C5.28 6.924 5.13 7.452 5.13 8.016C5.13 9.084 5.676 10.026 6.498 10.578C5.994 10.56 5.52 10.422 5.106 10.194V10.236C5.106 11.724 6.168 12.972 7.572 13.254C7.314 13.326 7.044 13.362 6.762 13.362C6.564 13.362 6.372 13.344 6.186 13.308C6.576 14.532 7.716 15.42 9.06 15.444C8.004 16.272 6.678 16.764 5.238 16.764C4.992 16.764 4.746 16.752 4.506 16.722C5.862 17.586 7.482 18.096 9.216 18.096Z" fill="#BEAD8E"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_54_1199">
                            <rect width="24" height="24" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                <svg class="footer__icons__single" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_54_1195)">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M21.0678 0C22.6861 0 24 1.31391 24 2.93222V21.0678C24 22.6861 22.6861 24 21.0678 24H2.93222C1.31391 24 0 22.6861 0 21.0678V2.93222C0 1.31391 1.31386 0 2.93222 0H21.0678V0ZM21.3605 15.4995C21.4035 14.8515 21.3508 14.2328 21.2008 13.6404C21.0494 13.047 20.8066 12.518 20.4667 12.0556C20.1263 11.5922 19.6927 11.2221 19.1646 10.9487C18.6338 10.6718 18.0156 10.536 17.3091 10.536C16.6691 10.536 16.0912 10.6496 15.5671 10.8755C15.0435 11.1027 14.5939 11.4134 14.2144 11.8071C13.8359 12.1985 13.5474 12.6653 13.3397 13.2064C13.1355 13.7456 13.0312 14.3288 13.0312 14.9532C13.0312 15.5989 13.1316 16.1949 13.3308 16.7332C13.5323 17.2742 13.815 17.7349 14.1789 18.1245C14.5526 18.5129 14.9964 18.8102 15.5276 19.0228C16.0593 19.2323 16.6514 19.3388 17.3091 19.3388C18.253 19.3388 19.0625 19.1227 19.7269 18.6891C20.3993 18.2568 20.8914 17.5392 21.2163 16.534H19.1961C19.118 16.7923 18.9156 17.0413 18.5832 17.2742C18.2477 17.5077 17.8483 17.6244 17.3858 17.6244C16.7423 17.6244 16.2457 17.4558 15.9018 17.1203C15.5574 16.7847 15.3346 16.1599 15.3346 15.4995H21.3605ZM8.21423 19.1227C8.73173 19.1227 9.23634 19.0575 9.72225 18.9287C10.214 18.7996 10.652 18.6007 11.0341 18.3305C11.4132 18.0624 11.7207 17.715 11.9466 17.2862C12.1707 16.8624 12.2826 16.3591 12.2826 15.7742C12.2826 15.0526 12.1108 14.4375 11.7607 13.9231C11.4123 13.4123 10.8859 13.0532 10.1772 12.8491C10.6978 12.6023 11.0879 12.285 11.3532 11.898C11.6173 11.5102 11.7487 11.0251 11.7487 10.4446C11.7487 9.90802 11.6603 9.45403 11.485 9.09145C11.3048 8.72353 11.0532 8.4315 10.7319 8.2118C10.4053 7.99214 10.0196 7.83192 9.56695 7.73606C9.11203 7.63711 8.61408 7.58963 8.06245 7.58963H2.625V19.1227H8.21423ZM7.92487 13.9826C8.4712 13.9826 8.91544 14.1082 9.24919 14.3611C9.58158 14.6172 9.74934 15.0397 9.74934 15.6339C9.74934 15.9371 9.70008 16.1883 9.59756 16.3818C9.49547 16.5761 9.35437 16.7297 9.18483 16.8415C9.01439 16.9578 8.81334 17.0368 8.58614 17.0861C8.36245 17.1362 8.12456 17.1584 7.87472 17.1584H5.16398V13.9826H7.92487ZM18.5375 12.7324C18.2646 12.4311 17.8035 12.2677 17.2402 12.2677C16.8737 12.2677 16.5705 12.3294 16.3274 12.455C16.0895 12.5793 15.8951 12.7333 15.7464 12.9152C15.5982 13.0998 15.4979 13.2951 15.4389 13.5037C15.3803 13.707 15.3448 13.8911 15.3346 14.054H19.0661C19.0115 13.4691 18.8113 13.0364 18.5375 12.7324ZM7.54008 9.5543C7.76512 9.55434 7.98394 9.57028 8.19338 9.61111C8.40595 9.64795 8.5897 9.71541 8.75212 9.81352C8.91544 9.90802 9.04547 10.0425 9.14353 10.2147C9.23808 10.3869 9.28467 10.6088 9.28467 10.8768C9.28467 11.3606 9.14353 11.7125 8.85155 11.926C8.55642 12.1425 8.18363 12.2491 7.73405 12.2491H5.16398V9.5543H7.54008ZM19.54 9.50152V8.36358H14.865V9.50152H19.54Z" fill="#777777"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_54_1195">
                            <rect width="24" height="24" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                <svg class="footer__icons__single" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_54_1191)">
                        <path d="M12.6477 10.6753V10.6387C12.6401 10.651 12.632 10.6634 12.6239 10.6753H12.6477Z" fill="#777777"/>
                        <path d="M21.782 0H1.73748C0.778081 0 0 0.759521 0 1.6956V21.9747C0 22.9103 0.778081 23.6698 1.73748 23.6698H21.782C22.7428 23.6698 23.5209 22.9098 23.5209 21.9747V1.6956C23.5209 0.759045 22.7423 0 21.782 0ZM7.12931 19.8146H3.57679V9.12662H7.12931V19.8146ZM5.35329 7.66659H5.32949C4.13787 7.66659 3.36692 6.84568 3.36692 5.82014C3.36692 4.77175 4.16166 3.97368 5.37661 3.97368C6.59203 3.97368 7.33965 4.77175 7.36345 5.82014C7.36345 6.84568 6.59156 7.66659 5.35329 7.66659ZM19.9398 19.8146H16.3873V14.0954C16.3873 12.6592 15.8733 11.6788 14.5879 11.6788C13.6067 11.6788 13.0223 12.3398 12.7648 12.9785C12.6711 13.2064 12.6482 13.5253 12.6482 13.8451V19.8142H9.09569C9.09569 19.8142 9.14233 10.1279 9.09569 9.12615H12.6482V10.639C13.1203 9.91089 13.9645 8.87393 15.8505 8.87393C18.1876 8.87393 19.9403 10.402 19.9403 13.6852V19.8146H19.9398Z" fill="#777777"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_54_1191">
                            <rect width="24" height="24" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                <svg class="footer__icons__single" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_54_1189)">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M21.0678 0C22.6861 0 24 1.31391 24 2.93222V21.0678C24 22.6861 22.6861 24 21.0678 24H2.93222C1.31391 24 0 22.6861 0 21.0678V2.93222C0 1.31391 1.31386 0 2.93222 0H21.0678V0ZM20.085 8.23266C19.8909 7.50661 19.3192 6.93483 18.5931 6.74081C17.277 6.38812 12 6.38812 12 6.38812C12 6.38812 6.72305 6.38812 5.40689 6.74081C4.68098 6.93483 4.10911 7.50661 3.91505 8.23266C3.5625 9.54867 3.5625 12.2945 3.5625 12.2945C3.5625 12.2945 3.5625 15.0402 3.91505 16.3561C4.10911 17.0821 4.68098 17.6541 5.40689 17.8481C6.72305 18.2006 12 18.2006 12 18.2006C12 18.2006 17.277 18.2006 18.5931 17.8481C19.3192 17.6541 19.8909 17.0821 20.085 16.3561C20.4375 15.0402 20.4375 12.2945 20.4375 12.2945C20.4375 12.2945 20.4375 9.54867 20.085 8.23266ZM10.3124 14.8258V9.76317L14.6966 12.2945L10.3124 14.8258Z" fill="#777777"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_54_1189">
                            <rect width="24" height="24" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>  
            </div>
        </div>
        <div class="footer-services-section">
            <p class="footer-services">Services.</p>
            <div class="footer-serviceList">
                <p>+ Restaurant & Bar</p>
                <p>+ Swimming Pool</p>
                <p>+ Wellness & Spa</p>
                <p>+ Restaurant</p>
                <p>+ Conference Room</p>
                <p>+ Cocktail Party House</p>
                <p>+ Gaming Zone</p>
                <p>+ Marriage Party</p>
                <p>+ Party Planning</p>
                <p>+ Tour Consultancy</p>
            </div>
        </div>
        <div class="footer-contact-section">
            <p class="footer-contact">Contact Us.</p>
            <div class="footer-contactData">
                <div>
                    <img src="../src/icons/phone.png"/>
                    <div>
                        <p>Phone Number</p>
                        <p>+987 876 765 76 577</p>
                    </div>
                </div>
                <div>
                    <img src="../src/icons/message.png"/>
                    <div>
                        <p>Fax</p>
                        <p>+987 876 765 76 577</p>
                    </div>
                </div>
                <div>
                    <img src="../src/icons/map.png"/>
                    <div>
                        <p>Location</p>
                        <p>123 Ocean View, Coral Bay</p>
                    </div>
                </div> 
            </div>
        </div>      
    </footer>
    <div class="footer-copyright">
        <p>Copyright By@Example - 2020</p>
        <p>Terms of use | Privacy Enviromental Policy</p>
    </div>
</body>
</html>