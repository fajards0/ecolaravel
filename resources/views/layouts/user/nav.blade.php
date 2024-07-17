<header id="header" class="header">
    <div class="header-center-section d-none d-lg-flex">
        <div class="container">
            <div class="header-center">
                <div class="logo">
                    <a href="index.html">
                        <img src="{{asset('icon/icon.png')}}" alt="logo" height="70">
                    </a>
                </div>
                <div class="header-cart-items">
                    <div class="header-cart">
                        <a href="{{url('cart')}}" class="cart-item">
                            <span>
                                <svg width="24" height="23" viewBox="0 0 24 23" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.1568 8.1772C16.0284 7.84626 15.7343 7.81766 14.2887 7.81766H13.0875V7.2947C13.0875 6.48165 12.9716 5.91374 12.6899 5.32949C12.1804 4.2713 11.3272 3.5318 10.2213 3.1886C9.68279 3.02517 8.87923 2.95572 8.39047 3.02926C7.03602 3.24172 5.88039 4.09562 5.29223 5.31315C5.00642 5.90966 4.89045 6.48165 4.89045 7.2947V7.82175H3.68511C2.23954 7.82175 1.94546 7.85035 1.81705 8.19354C1.75078 8.41008 1.12948 13.0637 0.864385 15.0697C0.632431 16.8184 0.417045 18.469 0.259648 19.711C-0.0137267 21.8519 -0.00544266 21.8846 0.00284141 21.9214V21.9255C0.0401198 22.0644 0.408761 22.428 0.520596 22.5342L1.00521 23H16.9438L17.3041 22.6854C17.4657 22.5424 18 22.0562 18 21.8152C18 21.6517 16.1899 8.27117 16.1568 8.1772ZM16.6911 21.5046C16.687 21.5332 16.6538 21.619 16.5958 21.6803L16.513 21.7702H1.46498L1.2496 21.5414L2.09871 15.2863C2.39694 13.0596 2.66203 11.1189 2.81943 9.95855C2.88984 9.45193 2.92298 9.19453 2.93955 9.06788C3.49872 9.06379 5.94252 9.0597 8.98278 9.0597H15.0302L15.0384 9.10465C15.1047 9.4315 16.6621 21.141 16.6911 21.5046ZM6.1372 7.82175V7.35598C6.1372 7.04139 6.17862 6.6083 6.22418 6.40811C6.46856 5.38669 7.30111 4.5573 8.34077 4.29173C8.77568 4.1855 9.48811 4.22228 9.92302 4.37753H9.92717C10.3828 4.5287 10.7556 4.77384 11.0994 5.14972C11.6544 5.74623 11.8408 6.28145 11.8408 7.27018V7.82175H6.1372Z"
                                        fill="black" />
                                    <path
                                        d="M17.0036 10.1087C16.4986 10.1065 16.0672 9.97337 15.7092 9.70916C15.3513 9.44496 15.0775 9.06037 14.8878 8.5554C14.6982 8.05043 14.6034 7.44212 14.6034 6.73047C14.6034 6.02095 14.6982 5.41477 14.8878 4.91193C15.0796 4.40909 15.3544 4.02557 15.7124 3.76136C16.0725 3.49716 16.5029 3.36506 17.0036 3.36506C17.5043 3.36506 17.9336 3.49822 18.2916 3.76456C18.6495 4.02876 18.9233 4.41229 19.113 4.91513C19.3047 5.41584 19.4006 6.02095 19.4006 6.73047C19.4006 7.44425 19.3058 8.05362 19.1162 8.55859C18.9265 9.06143 18.6527 9.44602 18.2948 9.71236C17.9368 9.97656 17.5064 10.1087 17.0036 10.1087ZM17.0036 9.25533C17.4468 9.25533 17.793 9.03906 18.0423 8.60653C18.2937 8.17401 18.4194 7.54865 18.4194 6.73047C18.4194 6.18714 18.3619 5.72798 18.2468 5.35298C18.1339 4.97585 17.9709 4.69034 17.7579 4.49645C17.5469 4.30043 17.2955 4.20241 17.0036 4.20241C16.5625 4.20241 16.2163 4.41974 15.9649 4.8544C15.7135 5.28906 15.5867 5.91442 15.5846 6.73047C15.5846 7.27592 15.641 7.73722 15.754 8.11435C15.869 8.48935 16.032 8.77379 16.2429 8.96768C16.4539 9.15945 16.7074 9.25533 17.0036 9.25533Z"
                                        fill="#F9FFFB" />
                                </svg>
                            </span>
                        </a>
                    </div>
                    @guest
                        <div class="header-user">
                            <a href="{{ url('login') }}">
                                <span>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M19.992 19.729C19.9004 18.043 19.438 16.4886 18.617 15.1176C17.6046 13.4237 16.2096 12.1244 14.4679 11.2475C14.0773 11.0522 13.878 10.9645 13.3878 10.7772L12.9334 10.6138L13.4954 10.1833C14.5476 9.38621 15.3408 8.08689 15.6118 6.70387C15.6955 6.28936 15.7035 5.22917 15.6317 4.78278C15.4643 3.77043 14.9582 2.70227 14.2766 1.92507C13.4356 0.976485 12.2439 0.30291 11.0084 0.079713C10.7971 0.0398565 10.1515 0 9.75289 0C9.60542 0 9.55361 0.00398565 9.53766 0.0079713H9.53368C9.49781 0.011957 9.42607 0.0239139 9.33838 0.0358709H9.32642C9.25468 0.0438422 9.17896 0.0557991 9.10323 0.0677561C8.1666 0.195297 7.01873 0.73336 6.25349 1.41092C5.27302 2.27581 4.59147 3.50339 4.38023 4.78278C4.3045 5.22917 4.31646 6.28936 4.40016 6.70387C4.67118 8.08689 5.46433 9.38621 6.51654 10.1833L7.07852 10.6138L6.62415 10.7772C6.13392 10.9645 5.93464 11.0522 5.54404 11.2475C3.80231 12.1244 2.40335 13.4237 1.39498 15.1176C0.569948 16.4926 0.107613 18.043 0.0159426 19.729L0 20H0.255082H1.1957H18.8123H19.4938H20.008L19.992 19.729ZM5.56397 4.98605C5.73934 3.92188 6.28537 2.95735 7.10642 2.25986C7.91949 1.57035 8.94779 1.19171 10 1.19171C10.2352 1.19171 10.4743 1.21164 10.7094 1.24751C13.1606 1.64607 14.8386 3.95775 14.444 6.39299C14.2686 7.45715 13.7226 8.42168 12.9016 9.11917C12.0885 9.80869 11.0602 10.1873 10.008 10.1873C9.77282 10.1873 9.53368 10.1674 9.29853 10.1315C6.84735 9.72898 5.16939 7.42128 5.56397 4.98605ZM2.54285 15.5281C3.73057 13.7146 5.31287 12.4751 7.25389 11.8414C8.17059 11.5424 9.09526 11.391 10.004 11.391C10.9127 11.391 11.8374 11.5424 12.7541 11.8414C14.6951 12.4751 16.2814 13.7146 17.4651 15.5281C18.047 16.4169 18.5134 17.6963 18.7086 18.8721H1.29932C1.49462 17.6963 1.96094 16.4169 2.54285 15.5281Z"
                                            fill="black" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    @else
                        <div class="header-logout">
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                                class="cart-item">
                                <span>
                                    <svg width="29" height="24" viewBox="0 0 29 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.9999 2C10.2385 2 7.99991 4.23858 7.99991 7C7.99991 7.55228 8.44762 8 8.99991 8C9.55219 8 9.99991 7.55228 9.99991 7C9.99991 5.34315 11.3431 4 12.9999 4H16.9999C18.6568 4 19.9999 5.34315 19.9999 7V17C19.9999 18.6569 18.6568 20 16.9999 20H12.9999C11.3431 20 9.99991 18.6569 9.99991 17C9.99991 16.4477 9.55219 16 8.99991 16C8.44762 16 7.99991 16.4477 7.99991 17C7.99991 19.7614 10.2385 22 12.9999 22H16.9999C19.7613 22 21.9999 19.7614 21.9999 17V7C21.9999 4.23858 19.7613 2 16.9999 2H12.9999Z"
                                            fill="#000000" />
                                        <path
                                            d="M13.9999 11C14.5522 11 14.9999 11.4477 14.9999 12C14.9999 12.5523 14.5522 13 13.9999 13V11Z"
                                            fill="#000000" />
                                        <path
                                            d="M5.71783 11C5.80685 10.8902 5.89214 10.7837 5.97282 10.682C6.21831 10.3723 6.42615 10.1004 6.57291 9.90549C6.64636 9.80795 6.70468 9.72946 6.74495 9.67492L6.79152 9.61162L6.804 9.59454L6.80842 9.58848C6.80846 9.58842 6.80892 9.58778 5.99991 9L6.80842 9.58848C7.13304 9.14167 7.0345 8.51561 6.58769 8.19098C6.14091 7.86637 5.51558 7.9654 5.19094 8.41215L5.18812 8.41602L5.17788 8.43002L5.13612 8.48679C5.09918 8.53682 5.04456 8.61033 4.97516 8.7025C4.83623 8.88702 4.63874 9.14542 4.40567 9.43937C3.93443 10.0337 3.33759 10.7481 2.7928 11.2929L2.08569 12L2.7928 12.7071C3.33759 13.2519 3.93443 13.9663 4.40567 14.5606C4.63874 14.8546 4.83623 15.113 4.97516 15.2975C5.04456 15.3897 5.09918 15.4632 5.13612 15.5132L5.17788 15.57L5.18812 15.584L5.19045 15.5872C5.51509 16.0339 6.14091 16.1336 6.58769 15.809C7.0345 15.4844 7.13355 14.859 6.80892 14.4122L5.99991 15C6.80892 14.4122 6.80897 14.4123 6.80892 14.4122L6.804 14.4055L6.79152 14.3884L6.74495 14.3251C6.70468 14.2705 6.64636 14.1921 6.57291 14.0945C6.42615 13.8996 6.21831 13.6277 5.97282 13.318C5.89214 13.2163 5.80685 13.1098 5.71783 13H13.9999V11H5.71783Z"
                                            fill="#000000" />
                                    </svg>
                                </span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    @endguest


                </div>
            </div>
        </div>
    </div>

    <nav class="mobile-menu d-block d-lg-none">
        <div class="mobile-menu-header d-flex justify-content-between align-items-center">
            <button class="btn" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                <span>
                    <svg width="14" height="9" viewBox="0 0 14 9" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect width="14" height="1" fill="#1D1D1D" />
                        <rect y="8" width="14" height="1" fill="#1D1D1D" />
                        <rect y="4" width="10" height="1" fill="#1D1D1D" />
                    </svg>
                </span>
            </button>
            <a href="index.html" class="mobile-header-logo">
                <img src="{{asset('https://quomodosoft.com/html/ecoshop/assets/images/logos/logo.webp')}}" alt="logo">
            </a>
            <a href="cart.html" class="header-cart cart-item">
                <span>
                    <svg width="24" height="23" viewBox="0 0 24 23" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M16.1568 8.1772C16.0284 7.84626 15.7343 7.81766 14.2887 7.81766H13.0875V7.2947C13.0875 6.48165 12.9716 5.91374 12.6899 5.32949C12.1804 4.2713 11.3272 3.5318 10.2213 3.1886C9.68279 3.02517 8.87923 2.95572 8.39047 3.02926C7.03602 3.24172 5.88039 4.09562 5.29223 5.31315C5.00642 5.90966 4.89045 6.48165 4.89045 7.2947V7.82175H3.68511C2.23954 7.82175 1.94546 7.85035 1.81705 8.19354C1.75078 8.41008 1.12948 13.0637 0.864385 15.0697C0.632431 16.8184 0.417045 18.469 0.259648 19.711C-0.0137267 21.8519 -0.00544266 21.8846 0.00284141 21.9214V21.9255C0.0401198 22.0644 0.408761 22.428 0.520596 22.5342L1.00521 23H16.9438L17.3041 22.6854C17.4657 22.5424 18 22.0562 18 21.8152C18 21.6517 16.1899 8.27117 16.1568 8.1772ZM16.6911 21.5046C16.687 21.5332 16.6538 21.619 16.5958 21.6803L16.513 21.7702H1.46498L1.2496 21.5414L2.09871 15.2863C2.39694 13.0596 2.66203 11.1189 2.81943 9.95855C2.88984 9.45193 2.92298 9.19453 2.93955 9.06788C3.49872 9.06379 5.94252 9.0597 8.98278 9.0597H15.0302L15.0384 9.10465C15.1047 9.4315 16.6621 21.141 16.6911 21.5046ZM6.1372 7.82175V7.35598C6.1372 7.04139 6.17862 6.6083 6.22418 6.40811C6.46856 5.38669 7.30111 4.5573 8.34077 4.29173C8.77568 4.1855 9.48811 4.22228 9.92302 4.37753H9.92717C10.3828 4.5287 10.7556 4.77384 11.0994 5.14972C11.6544 5.74623 11.8408 6.28145 11.8408 7.27018V7.82175H6.1372Z"
                            fill="black" />
                        <circle cx="17" cy="7" r="7" fill="#34A853" />
                        <path
                            d="M17.0036 10.1087C16.4986 10.1065 16.0672 9.97337 15.7092 9.70916C15.3513 9.44496 15.0775 9.06037 14.8878 8.5554C14.6982 8.05043 14.6034 7.44212 14.6034 6.73047C14.6034 6.02095 14.6982 5.41477 14.8878 4.91193C15.0796 4.40909 15.3544 4.02557 15.7124 3.76136C16.0725 3.49716 16.5029 3.36506 17.0036 3.36506C17.5043 3.36506 17.9336 3.49822 18.2916 3.76456C18.6495 4.02876 18.9233 4.41229 19.113 4.91513C19.3047 5.41584 19.4006 6.02095 19.4006 6.73047C19.4006 7.44425 19.3058 8.05362 19.1162 8.55859C18.9265 9.06143 18.6527 9.44602 18.2948 9.71236C17.9368 9.97656 17.5064 10.1087 17.0036 10.1087ZM17.0036 9.25533C17.4468 9.25533 17.793 9.03906 18.0423 8.60653C18.2937 8.17401 18.4194 7.54865 18.4194 6.73047C18.4194 6.18714 18.3619 5.72798 18.2468 5.35298C18.1339 4.97585 17.9709 4.69034 17.7579 4.49645C17.5469 4.30043 17.2955 4.20241 17.0036 4.20241C16.5625 4.20241 16.2163 4.41974 15.9649 4.8544C15.7135 5.28906 15.5867 5.91442 15.5846 6.73047C15.5846 7.27592 15.641 7.73722 15.754 8.11435C15.869 8.48935 16.032 8.77379 16.2429 8.96768C16.4539 9.15945 16.7074 9.25533 17.0036 9.25533Z"
                            fill="#F9FFFB" />
                    </svg>
                </span>
            </a>
        </div>

        <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions">

            <div class="offcanvas-body">
                <div class="header-top">
                    <div class="header-cart ">
                        <div class="header-compaire">
                            <a href="compaire.html" class="cart-item">
                                <span>
                                    <svg width="29" height="24" viewBox="0 0 29 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.00353 2.70598C8.00353 3.09348 7.99103 3.41431 7.97853 3.41431C7.96603 3.41431 7.76186 3.45181 7.53269 3.50181C3.57436 4.30181 0.620193 7.43098 0.0701934 11.406C-0.0589733 12.3143 -0.00480663 13.6977 0.191027 14.6227C0.68686 16.9893 2.22436 19.2102 4.25769 20.5102L4.49519 20.6602L5.08269 20.2185C5.40353 19.9768 5.67019 19.7685 5.67019 19.7518C5.67019 19.7393 5.56603 19.6727 5.44103 19.606C4.80353 19.2727 3.97436 18.606 3.41186 17.9768C2.34519 16.781 1.66186 15.3227 1.44103 13.7893C1.36186 13.2227 1.36186 12.0977 1.44103 11.5602C1.61186 10.4226 2.01186 9.34765 2.61186 8.40598C3.36186 7.23515 4.50353 6.21015 5.75353 5.58098C6.38686 5.26431 7.26603 4.96431 7.87019 4.85598L8.00353 4.83098V5.41431C8.00353 5.73515 8.01186 5.99765 8.02436 5.99765C8.06603 5.99765 10.6702 4.02681 10.6702 3.99765C10.6702 3.96848 8.06603 1.99764 8.02436 1.99764C8.01186 1.99764 8.00353 2.31431 8.00353 2.70598Z"
                                            fill="black" />
                                        <path
                                            d="M13.5914 5.11119C13.2706 5.35286 13.0122 5.56536 13.0247 5.58203C13.0372 5.60286 13.1622 5.68203 13.3081 5.76119C14.5289 6.45286 15.6664 7.61953 16.3706 8.91536C16.7956 9.69453 17.1539 10.8279 17.2539 11.7112C17.3372 12.407 17.2872 13.6029 17.1539 14.2362C16.5789 16.9612 14.6831 19.157 12.0664 20.132C11.7372 20.2529 10.8456 20.4987 10.7289 20.4987C10.6831 20.4987 10.6706 20.3945 10.6706 19.9154C10.6706 19.5945 10.6622 19.332 10.6497 19.332C10.6081 19.332 8.00391 21.3029 8.00391 21.332C8.00391 21.3612 10.6081 23.332 10.6497 23.332C10.6622 23.332 10.6706 23.0154 10.6706 22.6237V21.9195L10.8289 21.8945C11.2164 21.832 12.3122 21.5362 12.6706 21.3945C15.9206 20.1237 18.1456 17.307 18.6081 13.8737C18.7289 12.9904 18.6747 11.607 18.4831 10.707C17.9872 8.34036 16.4497 6.11953 14.4164 4.81953L14.1789 4.66953L13.5914 5.11119Z"
                                            fill="black" />
                                        <circle cx="21.668" cy="7" r="7" fill="#34A853" />
                                        <path
                                            d="M21.6716 10.1087C21.1666 10.1065 20.7351 9.97337 20.3772 9.70916C20.0192 9.44496 19.7454 9.06037 19.5558 8.5554C19.3662 8.05043 19.2714 7.44212 19.2714 6.73047C19.2714 6.02095 19.3662 5.41477 19.5558 4.91193C19.7476 4.40909 20.0224 4.02557 20.3804 3.76136C20.7405 3.49716 21.1709 3.36506 21.6716 3.36506C22.1723 3.36506 22.6016 3.49822 22.9596 3.76456C23.3175 4.02876 23.5913 4.41229 23.7809 4.91513C23.9727 5.41584 24.0686 6.02095 24.0686 6.73047C24.0686 7.44425 23.9738 8.05362 23.7841 8.55859C23.5945 9.06143 23.3207 9.44602 22.9628 9.71236C22.6048 9.97656 22.1744 10.1087 21.6716 10.1087ZM21.6716 9.25533C22.1147 9.25533 22.461 9.03906 22.7103 8.60653C22.9617 8.17401 23.0874 7.54865 23.0874 6.73047C23.0874 6.18714 23.0299 5.72798 22.9148 5.35298C22.8019 4.97585 22.6389 4.69034 22.4258 4.49645C22.2149 4.30043 21.9635 4.20241 21.6716 4.20241C21.2305 4.20241 20.8843 4.41974 20.6329 4.8544C20.3814 5.28906 20.2547 5.91442 20.2525 6.73047C20.2525 7.27592 20.309 7.73722 20.4219 8.11435C20.537 8.48935 20.7 8.77379 20.9109 8.96768C21.1218 9.15945 21.3754 9.25533 21.6716 9.25533Z"
                                            fill="#F9FFFB" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                        <div class="header-favourite">
                            <a href="wishlist.html" class="cart-item">
                                <span>
                                    <svg width="28" height="23" viewBox="0 0 28 23" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4.97214 5.02422C3.71435 5.18246 2.6616 5.7007 1.7705 6.60267C0.970091 7.40971 0.489057 8.26421 0.213053 9.37586C-0.275867 11.3024 0.0789948 13.2013 1.25398 14.9855C2.00708 16.1288 2.98097 17.1772 4.76711 18.7754C5.90266 19.7921 9.36848 22.7591 9.53802 22.858C9.69574 22.953 9.75488 22.9648 10.09 22.9648C10.4252 22.9648 10.4843 22.953 10.642 22.858C10.8116 22.7591 14.2853 19.7881 15.413 18.7754C17.207 17.1692 18.173 16.1249 18.9261 14.9855C20.1011 13.2013 20.4559 11.3024 19.967 9.37586C19.691 8.26421 19.21 7.40971 18.4096 6.60267C17.6131 5.7996 16.7614 5.33674 15.6456 5.09938C15.0857 4.9807 14.0526 4.96883 13.5637 5.0796C12.1995 5.3763 11.1546 6.0607 10.2004 7.27916L10.09 7.41762L9.98357 7.27916C9.04122 6.08443 8.01212 5.40004 6.69913 5.09938C6.30878 5.00839 5.4098 4.96883 4.97214 5.02422ZM6.28907 6.23081C7.40885 6.42861 8.37487 7.0774 9.13979 8.14948C9.26991 8.33542 9.43156 8.55696 9.49465 8.64795C9.78643 9.05937 10.3936 9.05937 10.6854 8.64795C10.7485 8.55696 10.9102 8.33542 11.0403 8.14948C12.0851 6.68575 13.5401 5.9974 15.1251 6.21498C16.8837 6.4563 18.2558 7.69058 18.7802 9.50641C19.1942 10.9424 19.0128 12.4497 18.2597 13.8066C17.6289 14.942 16.5761 16.1328 14.7427 17.7824C13.8555 18.5776 10.1255 21.7978 10.09 21.7978C10.0506 21.7978 6.33638 18.5895 5.4374 17.7824C2.61823 15.2466 1.50633 13.6642 1.23821 11.8088C1.06472 10.6101 1.31312 9.32047 1.91639 8.30377C2.82326 6.77278 4.58968 5.9341 6.28907 6.23081Z"
                                            fill="black" />
                                        <circle cx="20.9141" cy="7" r="7" fill="#34A853" />
                                        <path
                                            d="M20.9177 10.1087C20.4127 10.1065 19.9812 9.97337 19.6233 9.70916C19.2653 9.44496 18.9915 9.06037 18.8019 8.5554C18.6123 8.05043 18.5174 7.44212 18.5174 6.73047C18.5174 6.02095 18.6123 5.41477 18.8019 4.91193C18.9937 4.40909 19.2685 4.02557 19.6265 3.76136C19.9866 3.49716 20.4169 3.36506 20.9177 3.36506C21.4184 3.36506 21.8477 3.49822 22.2057 3.76456C22.5636 4.02876 22.8374 4.41229 23.027 4.91513C23.2188 5.41584 23.3147 6.02095 23.3147 6.73047C23.3147 7.44425 23.2199 8.05362 23.0302 8.55859C22.8406 9.06143 22.5668 9.44602 22.2089 9.71236C21.8509 9.97656 21.4205 10.1087 20.9177 10.1087ZM20.9177 9.25533C21.3608 9.25533 21.7071 9.03906 21.9564 8.60653C22.2078 8.17401 22.3335 7.54865 22.3335 6.73047C22.3335 6.18714 22.276 5.72798 22.1609 5.35298C22.048 4.97585 21.885 4.69034 21.6719 4.49645C21.461 4.30043 21.2096 4.20241 20.9177 4.20241C20.4766 4.20241 20.1304 4.41974 19.879 4.8544C19.6275 5.28906 19.5008 5.91442 19.4986 6.73047C19.4986 7.27592 19.5551 7.73722 19.668 8.11435C19.7831 8.48935 19.9461 8.77379 20.157 8.96768C20.3679 9.15945 20.6215 9.25533 20.9177 9.25533Z"
                                            fill="#F9FFFB" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="shop-btn">
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">

                        </button>
                    </div>
                </div>
                <div class="header-input">
                    <input type="text" placeholder="Search....">
                    <span>
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13.9708 16.4151C12.5227 17.4021 10.9758 17.9723 9.27353 18.0062C5.58462 18.0802 2.75802 16.483 1.05056 13.1945C-1.76315 7.77253 1.33485 1.37571 7.25086 0.167548C12.2281 -0.848249 17.2053 2.87895 17.7198 7.98579C17.9182 9.95558 17.5566 11.7939 16.5852 13.5061C16.4512 13.742 16.483 13.8725 16.6651 14.0553C18.2412 15.6386 19.8112 17.2272 21.3735 18.8244C22.1826 19.6513 22.2058 20.7559 21.456 21.4932C20.7697 22.1678 19.7047 22.1747 18.9764 21.4793C18.3623 20.8917 17.7774 20.2737 17.1796 19.6688C16.118 18.5929 15.0564 17.5153 13.9708 16.4151ZM2.89545 9.0364C2.91692 12.4172 5.59664 15.1164 8.91967 15.1042C12.2384 15.092 14.9138 12.3493 14.8889 8.98505C14.864 5.63213 12.1826 2.92508 8.89047 2.92857C5.58204 2.93118 2.87397 5.68958 2.89545 9.0364Z"
                                fill="#fff"></path>
                        </svg>
                    </span>
                </div>
            </div>
        </div>
    </nav>

    <div class="header-bottom d-lg-block d-none">
        <div class="container">
            <div class="header-nav">
                <div class="header-nav-menu-section">
                    <div class="header-nav-menu">
                        <ul class="menu-list">
                            <li>
                                <a href="{{ url('/') }}">
                                    <span class="list-text">Beranda</span>
                                </a>
                            </li>
                            <li class="mega-menu">
                                <a href="{{ url('shop') }}">
                                    <span class="list-text">Toko</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <a href="#" class="shop-btn">
                    Tentang
                </a>
            </div>
        </div>
    </div>
</header>
