<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Petition</title>
    <link href="styles/styles.css" rel="stylesheet" type="text/css">
    <link href="styles/create-styles.css" rel="stylesheet" type="text/css">
</head>
<body>

    <div class="container">
        <div class="nav">
            <div class="logo-container">
                <img src="./img/logo.png" alt=""Logo/>
            </div>
            <div class="nav-container">
                <p id="login-btn"  class="btn-login">Login</p>
            </div>
        </div>
        <header class="header">
            <p class="create-large-text">Start a Fundraiser</p>
            <p>Let’s make a difference and share our stories!</p>
        </header>
        <main>

            <p class="mid-text">What kind of Issue are you petitioning on?<span class="star"> *</span></p>
            <div class="category-container">
                <div class="selection-container">
                    <div class="btn-container" onclick="selectBase(0);check()">
                        <svg width="37" height="32" viewBox="0 0 37 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.9498 16.3491C15.4572 16.3491 14.1492 16.7939 13.0041 17.6322L12.9982 17.6365L12.9981 17.6365C10.0493 19.751 8.27279 22.7635 6.76484 26.1336C6.7383 26.2066 6.74072 26.3458 6.80938 26.7518C7.11206 28.0716 7.82855 28.8008 8.66497 29.1345C9.53598 29.4821 10.6343 29.4372 11.7036 28.9978L11.7078 28.996L11.7078 28.996C13.6891 28.1958 15.708 28.0494 17.6696 28.6612C18.4751 28.8818 19.2623 29.1327 20.0326 29.3781L20.0397 29.3804C20.8192 29.6288 21.5815 29.8717 22.3569 30.0838C23.5044 30.3755 24.5209 30.1611 25.2046 29.6605C25.8739 29.1706 26.2917 28.361 26.1891 27.2807C25.7594 22.9703 24.1293 19.3398 20.1075 17.1987C19.0219 16.6702 17.9975 16.3491 16.9498 16.3491ZM12.1211 16.4196C13.5195 15.3968 15.1362 14.8491 16.9498 14.8491C18.3153 14.8491 19.5771 15.2707 20.7769 15.8563L20.7885 15.8619L20.7998 15.8679C25.4194 18.3213 27.2213 22.5096 27.6819 27.1339L27.6823 27.1371C27.8337 28.7256 27.202 30.0573 26.0907 30.8709C24.9947 31.6732 23.501 31.9245 21.9796 31.5356L21.9676 31.5325L21.9676 31.5324C21.1574 31.311 20.3658 31.0587 19.5913 30.8119L19.5842 30.8096C18.8027 30.5605 18.0383 30.317 17.2609 30.1045L17.2474 30.1009L17.2341 30.0967C15.6387 29.5961 13.974 29.6989 12.2716 30.3861C10.9244 30.9392 9.41586 31.0491 8.10913 30.5278C6.77108 29.9939 5.74128 28.8351 5.3418 27.0627L5.33746 27.0435L5.33415 27.0241C5.331 27.0056 5.32759 26.9861 5.32401 26.9657C5.26733 26.6416 5.16806 26.0739 5.37946 25.5581L5.38394 25.5471L5.38876 25.5364C6.93191 22.0847 8.84283 18.7716 12.1211 16.4196Z" fill="#EC1D17"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.2304 2.86742C10.502 3.89737 10.188 5.36556 10.3194 6.84813C10.4511 8.33349 11.0194 9.71538 11.909 10.5837L11.9149 10.5895L11.9208 10.5954C12.4894 11.1756 13.1124 11.3975 13.6796 11.3649C14.25 11.3322 14.8603 11.0363 15.3845 10.3966L15.3893 10.3908L15.3942 10.3851C16.1669 9.47999 16.3568 8.35835 16.4843 6.95435C16.3573 5.24009 15.9919 3.74646 14.8621 2.58715C14.1876 1.93141 13.5196 1.70863 12.9503 1.75626C12.3795 1.80402 11.7677 2.13527 11.2304 2.86742ZM12.8252 0.261486C13.9238 0.169579 15.0026 0.628176 15.916 1.51978L15.9223 1.52587L15.9284 1.53211C17.4521 3.09013 17.8535 5.04962 17.9848 6.90806L17.989 6.96781L17.9837 7.02748C17.8571 8.44906 17.66 10.0374 16.5399 11.3533C15.7927 12.2621 14.8148 12.8022 13.7655 12.8624C12.7133 12.9229 11.685 12.495 10.8553 11.6513C9.64968 10.471 8.97958 8.72061 8.82531 6.9806C8.67073 5.23711 9.02349 3.38608 10.0101 1.99508L10.0165 1.98601L10.0166 1.98606C10.7506 0.983067 11.7276 0.353318 12.8252 0.261486Z" fill="#EC1D17"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M25.0827 2.67071C24.4256 2.48899 23.567 2.65372 22.6947 3.4253L22.6893 3.43006L22.6893 3.43004C21.164 4.75342 20.5309 6.45565 20.5309 8.45083C20.5309 8.59984 20.5212 8.76742 20.5136 8.90013C20.5106 8.95136 20.508 8.99741 20.5063 9.03517C20.4988 9.20342 20.5034 9.29631 20.5156 9.35565L20.5183 9.36884L20.5182 9.36886C20.7593 10.6631 21.1867 11.5397 22.2481 11.9001C23.3069 12.2595 24.2198 11.812 25.0104 10.9301L25.0152 10.9248L25.02 10.9195C26.7673 9.04357 27.3749 6.89078 26.6936 4.5023C26.3693 3.42511 25.737 2.85165 25.0827 2.67071ZM25.4825 1.22497C26.7355 1.57147 27.6924 2.61076 28.1318 4.07598L28.1345 4.08521L28.1345 4.08522C28.9769 7.03156 28.1867 9.7176 26.1225 11.9367C25.1321 13.039 23.6299 13.9533 21.7659 13.3204C19.9041 12.6884 19.3129 11.0852 19.0446 9.6494C18.9948 9.40085 18.9994 9.1553 19.0078 8.96842C19.0113 8.88803 19.0154 8.81965 19.019 8.75721C19.0255 8.64772 19.0309 8.55651 19.0309 8.45083C19.0309 6.10143 19.7963 3.95556 21.7036 2.29937C22.8661 1.27238 24.2325 0.879265 25.4825 1.22497Z" fill="#EC1D17"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M31.3341 12.8575C29.5764 14.0769 28.7321 15.7689 28.6722 17.8354C28.674 18.8817 28.9477 19.6424 29.7914 20.0758C30.6191 20.501 31.3787 20.2656 32.3288 19.6298C34.0005 18.4292 34.804 16.7517 34.9919 14.7287C34.8637 13.5783 34.6804 12.8834 33.8763 12.4704C33.0259 12.0335 32.2545 12.2409 31.3341 12.8575ZM30.4937 11.615C31.6066 10.8682 32.9965 10.3321 34.5617 11.1361C36.1577 11.956 36.3655 13.4755 36.4912 14.6406L36.499 14.7127L36.4928 14.7848C36.2869 17.196 35.3113 19.3397 33.1927 20.8561L33.1834 20.8627L33.174 20.869C32.0932 21.5943 30.6925 22.225 29.106 21.41C27.5355 20.6032 27.1722 19.1326 27.1722 17.8251V17.8147L27.1725 17.8043C27.2423 15.2834 28.3048 13.1311 30.4845 11.6213L30.4936 11.615L30.4937 11.615Z" fill="#EC1D17"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.08632 10.6761C1.66452 11.657 1.64571 12.9462 1.99466 14.2021C2.34208 15.4526 3.0249 16.5637 3.87669 17.219C4.62557 17.7368 5.29943 17.8353 5.81892 17.6919C6.33422 17.5496 6.84387 17.1291 7.18901 16.3083C7.39463 15.7508 7.45479 15.2389 7.51608 14.644C7.38847 12.6891 6.80069 11.0838 5.3211 9.90705L5.31236 9.9001C4.67614 9.37848 4.02321 9.25778 3.48516 9.38907C2.94588 9.52066 2.41836 9.93076 2.08632 10.6761ZM6.25905 8.73647C5.3061 7.95713 4.18001 7.67551 3.12957 7.93182C2.07961 8.18803 1.20867 8.95635 0.713759 10.0711L0.710584 10.0783C0.116237 11.4561 0.135533 13.1141 0.549403 14.6037C0.963509 16.0941 1.80215 17.5235 2.9798 18.4215L2.99252 18.4312L3.00565 18.4403C4.03241 19.1561 5.1664 19.4281 6.21807 19.1378C7.27426 18.8462 8.09764 18.0289 8.57929 16.8717L8.58473 16.8586L8.58968 16.8453C8.87772 16.0722 8.94956 15.3706 9.01197 14.761L9.02081 14.6747L9.01714 14.6138C8.88228 12.3762 8.19569 10.2789 6.25905 8.73647Z" fill="#EC1D17"/>
                        </svg>
                    </div>
                    <p>Animals</p>
                </div><div class="selection-container">
                    <div class="btn-container" onclick="selectBase(1);check()">
                        <svg width="43" height="37" viewBox="0 0 43 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.0029 37C20.6765 37 20.4588 36.8912 20.2412 36.6735L3.37353 19.8059C-1.08823 15.2353 -1.08823 7.94412 3.37353 3.37353C5.55 1.19706 8.48824 0 11.5353 0C14.5824 0 17.5206 1.19706 19.6971 3.37353L21.0029 4.67941L22.2 3.48235C26.7706 -1.08823 34.1706 -1.08824 38.7412 3.37353C40.9176 5.55 42.1147 8.48824 42.1147 11.5353C42.1147 14.5824 40.9176 17.5206 38.7412 19.6971L21.7647 36.6735C21.6559 36.8912 21.3294 37 21.0029 37ZM11.6441 2.17647C9.03235 2.17647 6.74706 3.15588 4.89706 4.89706C3.15588 6.74706 2.17647 9.03235 2.17647 11.6441C2.17647 14.1471 3.15588 16.5412 4.89706 18.2824L21.0029 34.3882L37.1088 18.2824C38.85 16.5412 39.8294 14.1471 39.8294 11.6441C39.8294 9.14118 38.85 6.74706 37.1088 5.00588C33.4088 1.30588 27.5324 1.30588 23.8324 5.00588L21.7647 6.96471C21.3294 7.4 20.6765 7.4 20.2412 6.96471L18.1735 4.89706C16.4324 3.15588 14.1471 2.17647 11.6441 2.17647Z" fill="#EC1D17"/>
                        </svg>

                    </div>
                    <p>Health</p>
                </div><div class="selection-container">
                    <div class="btn-container" onclick="selectBase(2);check()">
                        <svg width="33" height="37" viewBox="0 0 33 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M26.9881 8.87007C26.6792 8.71425 26.458 8.42417 26.3897 8.085C25.9759 6.03121 24.9303 4.15364 23.3743 2.70447C21.5017 0.960482 19.0604 0 16.5001 0C13.9398 0 11.4986 0.960482 9.62587 2.70447C8.06985 4.15364 7.02431 6.03123 6.61055 8.08503C6.54223 8.42418 6.32097 8.71425 6.01208 8.87007C2.64834 10.5669 0.462585 14.0476 0.462585 17.8816C0.462585 23.4446 4.98837 27.9703 10.5512 27.9703C11.692 27.9703 12.8135 27.7773 13.8722 27.4081C14.5906 27.1575 15.416 27.6511 15.416 28.412V36C15.416 36.5523 15.8637 37 16.416 37H16.584C17.1363 37 17.584 36.5523 17.584 36V28.412C17.584 27.6511 18.4094 27.1575 19.1278 27.4081C20.1864 27.7773 21.3079 27.9703 22.4487 27.9703C28.0117 27.9703 32.5374 23.4445 32.5374 17.8816C32.5376 14.0477 30.3519 10.5668 26.9881 8.87007ZM22.4489 25.8023C20.8445 25.8023 19.2887 25.3164 17.9785 24.4196C17.7241 24.2455 17.5841 23.9511 17.5841 23.6428V18.105C17.5841 17.7336 17.79 17.3928 18.1187 17.2199L21.561 15.41C22.0498 15.153 22.2377 14.5483 21.9807 14.0595L21.9025 13.9108C21.6455 13.422 21.0408 13.2341 20.552 13.4911L19.0495 14.2811C18.3836 14.6313 17.5841 14.1484 17.5841 13.396V11.7842C17.5841 11.2319 17.1364 10.7842 16.5841 10.7842H16.4161C15.8639 10.7842 15.4161 11.2319 15.4161 11.7842V18.2012C15.4161 18.9535 14.6167 19.4364 13.9508 19.0863L12.4483 18.2963C11.9594 18.0392 11.3548 18.2272 11.0978 18.716L11.0196 18.8646C10.7626 19.3535 10.9505 19.9581 11.4393 20.2152L14.8815 22.0251C15.2103 22.1979 15.4161 22.5387 15.4161 22.9102V23.6428C15.4161 23.9511 15.2762 24.2455 15.0218 24.4196C13.7115 25.3164 12.1558 25.8023 10.5514 25.8023C6.18386 25.8023 2.6307 22.2491 2.6307 17.8816C2.6307 14.5422 4.74273 11.5439 7.88622 10.4208L7.93752 10.4025C8.30958 10.2696 8.5685 9.9301 8.59827 9.53614L8.60237 9.48183C8.75254 7.49676 9.64075 5.65327 11.1035 4.29099C12.5734 2.92192 14.4901 2.16797 16.5001 2.16797C18.5102 2.16797 20.4268 2.92192 21.8969 4.29092C23.3596 5.6532 24.2478 7.49662 24.398 9.48176L24.4021 9.53606C24.4318 9.93003 24.6908 10.2695 25.0628 10.4024L25.1141 10.4208C28.2576 11.5439 30.3696 14.5421 30.3696 17.8816C30.3696 22.2491 26.8164 25.8023 22.4489 25.8023Z" fill="#EC1D17"/>
                        </svg>

                    </div>
                    <p>Environment</p>
                </div><div class="selection-container">
                    <div class="btn-container" onclick="selectBase(3);check()">
                        <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M29.2917 27.75C31.8416 27.75 33.9167 25.6749 33.9167 23.125C33.9167 20.5751 31.8416 18.5 29.2917 18.5C26.7417 18.5 24.6667 20.5751 24.6667 23.125C24.6667 25.6749 26.7417 27.75 29.2917 27.75ZM29.2917 20.8125C30.5666 20.8125 31.6042 21.85 31.6042 23.125C31.6042 24.4 30.5666 25.4375 29.2917 25.4375C28.0167 25.4375 26.9792 24.4 26.9792 23.125C26.9792 21.85 28.0167 20.8125 29.2917 20.8125Z" fill="#EC1D17"/>
                            <path d="M12.3333 0C5.53304 0 0 4.86396 0 10.8425C0 16.8211 5.53304 21.6851 12.3333 21.6851C12.9454 21.6851 13.5651 21.645 14.1772 21.5618L20.0031 24.5403C20.1696 24.625 20.35 24.6667 20.5288 24.6667C20.7894 24.6667 21.0484 24.5788 21.2596 24.4077C21.6142 24.1178 21.7653 23.6476 21.645 23.2052L20.4872 18.9733C23.1543 16.9167 24.6667 13.9937 24.6667 10.8425C24.6667 4.86396 19.1336 0 12.3333 0V0ZM18.517 17.5426C18.1023 17.8186 17.9126 18.3289 18.0437 18.8083L18.722 21.2873L14.9002 19.334C14.7383 19.2523 14.5564 19.2092 14.3745 19.2092C14.3128 19.2092 14.2527 19.2138 14.191 19.2246C13.5759 19.3233 12.95 19.3726 12.3333 19.3726C6.808 19.3726 2.3125 15.5462 2.3125 10.8425C2.3125 6.13892 6.808 2.3125 12.3333 2.3125C17.8587 2.3125 22.3542 6.13892 22.3542 10.8425C22.3542 13.4695 20.9559 15.9115 18.517 17.5426V17.5426Z" fill="#EC1D17"/>
                            <path d="M32.7604 29.2917H25.8229C23.4842 29.2917 21.5833 31.1926 21.5833 33.5313V35.8438C21.5833 36.482 22.1013 37 22.7396 37C23.3778 37 23.8958 36.482 23.8958 35.8438V33.5313C23.8958 32.4691 24.7607 31.6042 25.8229 31.6042H32.7604C33.8226 31.6042 34.6875 32.4691 34.6875 33.5313V35.8438C34.6875 36.482 35.2055 37 35.8438 37C36.482 37 37 36.482 37 35.8438V33.5313C37 31.1926 35.0991 29.2917 32.7604 29.2917Z" fill="#EC1D17"/>
                        </svg>

                    </div>
                    <p>Politics</p>
                </div><div class="selection-container">
                    <div class="btn-container" onclick="selectBase(4);check()">
                        <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.5 2.08334C8.53787 2.08334 2.08331 8.5379 2.08331 16.5C2.08331 24.4621 8.53787 30.9167 16.5 30.9167C24.4621 30.9167 30.9166 24.4621 30.9166 16.5C30.9166 8.5379 24.4621 2.08334 16.5 2.08334ZM0.083313 16.5C0.083313 7.43333 7.43331 0.0833359 16.5 0.0833359C25.5667 0.0833359 32.9166 7.43333 32.9166 16.5C32.9166 25.5667 25.5667 32.9167 16.5 32.9167C7.43331 32.9167 0.083313 25.5667 0.083313 16.5Z" fill="#EC1D17"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.9473 10.0834C16.1617 9.94861 15.3538 10.0962 14.6666 10.5001C13.9795 10.9039 13.4574 11.5379 13.1929 12.2898C12.9638 12.941 12.2502 13.2833 11.599 13.0542C10.9477 12.8251 10.6055 12.1114 10.8346 11.4602C11.295 10.1514 12.2038 9.04773 13.3999 8.34474C14.5961 7.64175 16.0024 7.38478 17.3699 7.61934C18.7374 7.85389 19.9777 8.56484 20.8712 9.62627C21.7645 10.6875 22.2535 12.0305 22.2517 13.4176C22.2512 15.6223 20.6141 17.1044 19.3826 17.9255C18.7286 18.3614 18.0836 18.683 17.607 18.8949C17.3669 19.0016 17.1651 19.0824 17.0204 19.1375C16.9479 19.1651 16.8895 19.1864 16.8474 19.2014C16.8263 19.2089 16.8093 19.2148 16.7967 19.2191L16.781 19.2245L16.7756 19.2263L16.7736 19.227L16.7727 19.2273C16.7723 19.2274 16.772 19.2275 16.3767 18.0417L16.772 19.2275C16.117 19.4458 15.4091 19.0919 15.1908 18.4369C14.9728 17.7828 15.3257 17.0757 15.9791 16.8566C15.9795 16.8565 15.9798 16.8563 15.9801 16.8562C15.9803 16.8562 15.9804 16.8561 15.9806 16.8561L15.9808 16.856L15.9832 16.8552L16.0099 16.8458C16.0355 16.8367 16.0764 16.8219 16.1304 16.8013C16.2386 16.7601 16.3982 16.6963 16.5917 16.6103C16.9822 16.4367 17.4935 16.1802 17.9958 15.8453C19.0766 15.1248 19.7517 14.2947 19.7517 13.4167L19.7517 13.4148C19.7529 12.6178 19.4719 11.846 18.9586 11.2363C18.4454 10.6265 17.7328 10.2181 16.9473 10.0834ZM22.2517 13.4176C22.2517 13.4179 22.2517 13.4182 22.2517 13.4185L21.0017 13.4167H22.2517C22.2517 13.417 22.2517 13.4173 22.2517 13.4176Z" fill="#EC1D17"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15 24.2083C15 23.3799 15.6716 22.7083 16.5 22.7083H16.5154C17.3438 22.7083 18.0154 23.3799 18.0154 24.2083C18.0154 25.0368 17.3438 25.7083 16.5154 25.7083H16.5C15.6716 25.7083 15 25.0368 15 24.2083Z" fill="#EC1D17"/>
                        </svg>

                    </div>
                    <p>Other</p>
                </div>
            </div>
            <div class="form-1">
                <p class="mid-text">Title <span class="star"> *</span></p>
                <input type="text" placeholder="What’s the Petition about?" class="inp-title" oninput="check()">
            </div>
            <div class="form-1">
                <p class="mid-text">Recipient <span class="star"> *</span></p>
                <input type="text" placeholder="Mayor, City, Organization, ect..." class="inp-recipient" oninput="check()">
            </div>
            <div class="form-1">
                <p class="mid-text">Goal <span class="star"> *</span></p>
                <div class="money-container">
                    <p class="form-des">What is your fundraising goal you’d like to reach?</p>
                    <input type="text" placeholder="$100,000" class="inp-goal" oninput="check();checkNum()" onblur="checkGoal()" onfocus="addDollar()">
                </div>
            </div>
            <div class="form-2">
                <p class="mid-text">Problem <span class="star"> *</span></p>
                <p class="form-des">People are more likely to support your petition if it’s clear why you care.<br/>
                    Explain how this change will impact you, your family, or your community.</p>
                <textarea placeholder="What is your petition about?" oninput="check()" class="inp-problem"></textarea>
            </div>
            <div class="form-2">
                <p class="mid-text">Add a photo</p>
                <p class="form-des">Include a photo that captures the emotion of your story (optional).</p>
                <input type="text" placeholder="https://" class="inp-img">
            </div>
            <div class="submit-container">
                <div class="btn-submit" onclick="submitData()">
                    <p>Post Petition</p>
                </div>
            </div>
        </main>
    </div>
<script src="./js/create.js" type="application/javascript"></script>
</body>
</html>