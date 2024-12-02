
<!DOCTYPE html>
<html lang="pt" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Favicon icon-->
  <link rel="shortcut icon" type="image/png" href="/assets/images/logos/favicon.png" />

  <!-- Core Css -->
  <link rel="stylesheet" href="/assets/css/styles.css" />

  <title>MatDash Bootstrap Admin</title>
  <style>
    body,
    html {
      height: 100%;
      margin: 0;
      padding: 0;
      overflow: hidden;
    }

    .conteudo {
      max-height: 100vh;
      overflow: auto;
    }
  </style>
</head>

<body style="background-color: white; height: 100%; margin: 0; padding: 0;">
  <!-- Preloader -->
  <div class="preloader">
    <img src="/assets/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
  </div>
  <div>
    <div class="container-fluid">


      <div class=" overflow-hidden chat-application ">
        <div class="d-flex align-items-center justify-content-between gap-6 m-3 d-lg-none">
          <button class="btn btn-primary d-flex" type="button" data-bs-toggle="offcanvas" data-bs-target="#chat-sidebar"
            aria-controls="chat-sidebar">
            <i class="ti ti-menu-2 fs-5"></i>
          </button>
          <form class="position-relative w-100">
            <input type="text" class="form-control search-chat py-2 ps-5" id="text-srh" placeholder="Search Contact" />
            <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
          </form>
        </div>
        <div class="d-flex">
          <div class="w-30 d-none d-lg-block border-end user-chat-box">
            <div class="px-4 pt-9 pb-6">
              <div class="d-flex align-items-center justify-content-between mb-3">
                <div class="d-flex align-items-center">
                  <h3>Chat</h3>
                </div>
                <div class="dropdown">
                  <a class="text-dark fs-6 nav-icon-hover" href="javascript:void(0)" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="ti ti-dots-vertical"></i>
                  </a>
                  <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item d-flex align-items-center gap-2 border-bottom" href="javascript:void(0)">
                        <span>
                          <i class="ti ti-settings fs-4"></i>
                        </span>Setting
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item d-flex align-items-center gap-2" href="javascript:void(0)">
                        <span>
                          <i class="ti ti-help fs-4"></i>
                        </span>Help
                        and feedback
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item d-flex align-items-center gap-2" href="javascript:void(0)">
                        <span>
                          <i class="ti ti-layout-board-split fs-4"></i>
                        </span>Enable split View mode
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item d-flex align-items-center gap-2 border-bottom" href="javascript:void(0)">
                        <span>
                          <i class="ti ti-table-shortcut fs-4"></i>
                        </span>Keyboard
                        shortcut
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item d-flex align-items-center gap-2" href="javascript:void(0)">
                        <span>
                          <i class="ti ti-login fs-4"></i>
                        </span>Sign
                        Out
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <form class="position-relative mb-4">
                <input type="text" class="form-control search-chat py-2 ps-5" id="text-srh"
                  placeholder="Search Contact" />
                <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
              </form>

            </div>
            @livewire('chat.convesations')
          </div>


          @livewire('chat.chat-room')

          <div class="offcanvas offcanvas-start user-chat-box chat-offcanvas" tabindex="-1" id="chat-sidebar"
            aria-labelledby="offcanvasExampleLabel" style="width: 100%">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasExampleLabel">
                Chat
              </h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="px-4 pt-9 pb-6">
              <div class="d-flex align-items-center justify-content-between mb-3">
                <div class="d-flex align-items-center">
                  <div class="position-relative">
                    <img src="/assets/images/profile/user-1.jpg" alt="user1" width="54" height="54"
                      class="rounded-circle" />
                    <span class="position-absolute bottom-0 end-0 p-1 badge rounded-pill bg-success">
                      <span class="visually-hidden">New alerts</span>
                    </span>
                  </div>
                  <div class="ms-3">
                    <h6 class="fw-semibold mb-2">David McMichael</h6>
                    <p class="mb-0 fs-2">Marketing Director</p>
                  </div>
                </div>
                <div class="dropdown">
                  <a class="text-dark fs-6 nav-icon-hover" href="javascript:void(0)" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="ti ti-dots-vertical"></i>
                  </a>
                  <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item d-flex align-items-center gap-2 border-bottom" href="javascript:void(0)">
                        <span>
                          <i class="ti ti-settings fs-4"></i>
                        </span>Setting
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item d-flex align-items-center gap-2" href="javascript:void(0)">
                        <span>
                          <i class="ti ti-help fs-4"></i>
                        </span>Help
                        and feedback
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item d-flex align-items-center gap-2" href="javascript:void(0)">
                        <span>
                          <i class="ti ti-layout-board-split fs-4"></i>
                        </span>Enable split View mode
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item d-flex align-items-center gap-2 border-bottom" href="javascript:void(0)">
                        <span>
                          <i class="ti ti-table-shortcut fs-4"></i>
                        </span>Keyboard
                        shortcut
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item d-flex align-items-center gap-2" href="javascript:void(0)">
                        <span>
                          <i class="ti ti-login fs-4"></i>
                        </span>Sign
                        Out
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <form class="position-relative mb-4">
                <input type="text" class="form-control search-chat py-2 ps-5" id="text-srh"
                  placeholder="Search Contact" />
                <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
              </form>
              <div class="dropdown">
                <a class="text-muted fw-semibold d-flex align-items-center" href="javascript:void(0)" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  Recent Chats<i class="ti ti-chevron-down ms-1 fs-5"></i>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item" href="javascript:void(0)">Sort by time</a>
                  </li>
                  <li>
                    <a class="dropdown-item border-bottom" href="javascript:void(0)">Sort by Unread</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="javascript:void(0)">Hide favourites</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="app-chat">
              <ul class="chat-users mh-n100" data-simplebar>
                <li>
                  <a href="javascript:void(0)"
                    class="px-4 py-3 bg-hover-light-black d-flex align-items-start justify-content-between chat-user bg-light-subtle"
                    id="chat_user_1" data-user-id="1">
                    <div class="d-flex align-items-center">
                      <span class="position-relative">
                        <img src="/assets/images/profile/user-2.jpg" alt="user1" width="48" height="48"
                          class="rounded-circle" />
                        <span class="position-absolute bottom-0 end-0 p-1 badge rounded-pill bg-success">
                          <span class="visually-hidden">New alerts</span>
                        </span>
                      </span>
                      <div class="ms-3 d-inline-block w-75">
                        <h6 class="mb-1 fw-semibold chat-title" data-username="James Anderson">
                          Michell Flintoff
                        </h6>
                        <span class="fs-3 text-truncate text-body-color d-block">You: Yesterdy was great...</span>
                      </div>
                    </div>
                    <p class="fs-2 mb-0 text-muted">15 mins</p>
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0)"
                    class="px-4 py-3 bg-hover-light-black d-flex align-items-start justify-content-between chat-user"
                    id="chat_user_2" data-user-id="2">
                    <div class="d-flex align-items-center">
                      <span class="position-relative">
                        <img src="/assets/images/profile/user-2.jpg" alt="user-2" width="48" height="48"
                          class="rounded-circle" />
                        <span class="position-absolute bottom-0 end-0 p-1 badge rounded-pill bg-danger">
                          <span class="visually-hidden">New alerts</span>
                        </span>
                      </span>
                      <div class="ms-3 d-inline-block w-75">
                        <h6 class="mb-1 fw-semibold chat-title" data-username="James Anderson">
                          Bianca Anderson
                        </h6>
                        <span class="fs-3 text-truncate text-dark fw-semibold d-block">Nice looking dress
                          you...</span>
                      </div>
                    </div>
                    <p class="fs-2 mb-0 text-muted">30 mins</p>
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0)"
                    class="px-4 py-3 bg-hover-light-black d-flex align-items-start justify-content-between chat-user"
                    id="chat_user_3" data-user-id="3">
                    <div class="d-flex align-items-center">
                      <span class="position-relative">
                        <img src="/assets/images/profile/user-8.jpg" alt="user-8" width="48" height="48"
                          class="rounded-circle" />
                        <span class="position-absolute bottom-0 end-0 p-1 badge rounded-pill bg-warning">
                          <span class="visually-hidden">New alerts</span>
                        </span>
                      </span>
                      <div class="ms-3 d-inline-block w-75">
                        <h6 class="mb-1 fw-semibold chat-title" data-username="James Anderson">
                          Andrew Johnson
                        </h6>
                        <span class="fs-3 text-truncate text-body-color d-block">Sent a photo</span>
                      </div>
                    </div>
                    <p class="fs-2 mb-0 text-muted">2 hrs</p>
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0)"
                    class="px-4 py-3 bg-hover-light-black d-flex align-items-start justify-content-between chat-user"
                    id="chat_user_4" data-user-id="4">
                    <div class="d-flex align-items-center">
                      <span class="position-relative">
                        <img src="/assets/images/profile/user-4.jpg" alt="user-4" width="48" height="48"
                          class="rounded-circle" />
                        <span class="position-absolute bottom-0 end-0 p-1 badge rounded-pill bg-success">
                          <span class="visually-hidden">New alerts</span>
                        </span>
                      </span>
                      <div class="ms-3 d-inline-block w-75">
                        <h6 class="mb-1 fw-semibold chat-title" data-username="James Anderson">
                          Daisy Wilson
                        </h6>
                        <span class="fs-3 text-truncate text-body-color d-block">Lorem ispusm text sud...</span>
                      </div>
                    </div>
                    <p class="fs-2 mb-0 text-muted">5 days</p>
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0)"
                    class="px-4 py-3 bg-hover-light-black d-flex align-items-start justify-content-between chat-user"
                    id="chat_user_5" data-user-id="5">
                    <div class="d-flex align-items-center">
                      <span class="position-relative">
                        <img src="/assets/images/profile/user-7.jpg" alt="user1" width="48" height="48"
                          class="rounded-circle" />
                        <span class="position-absolute bottom-0 end-0 p-1 badge rounded-pill bg-success">
                          <span class="visually-hidden">New alerts</span>
                        </span>
                      </span>
                      <div class="ms-3 d-inline-block w-75">
                        <h6 class="mb-1 fw-semibold chat-title" data-username="James Anderson">
                          Mark, Stoinus & Rishvi..
                        </h6>
                        <span class="fs-3 text-truncate text-dark fw-semibold d-block">Lorem ispusm text ...</span>
                      </div>
                    </div>
                    <p class="fs-2 mb-0 text-muted">5 days</p>
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0)"
                    class="px-4 py-3 bg-hover-light-black d-flex align-items-start justify-content-between chat-user"
                    id="chat_user_2" data-user-id="2">
                    <div class="d-flex align-items-center">
                      <span class="position-relative">
                        <img src="/assets/images/profile/user-2.jpg" alt="user-2" width="48" height="48"
                          class="rounded-circle" />
                        <span class="position-absolute bottom-0 end-0 p-1 badge rounded-pill bg-danger">
                          <span class="visually-hidden">New alerts</span>
                        </span>
                      </span>
                      <div class="ms-3 d-inline-block w-75">
                        <h6 class="mb-1 fw-semibold chat-title" data-username="James Anderson">
                          Bianca Anderson
                        </h6>
                        <span class="fs-3 text-truncate text-dark fw-semibold d-block">Nice looking dress
                          you...</span>
                      </div>
                    </div>
                    <p class="fs-2 mb-0 text-muted">30 mins</p>
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0)"
                    class="px-4 py-3 bg-hover-light-black d-flex align-items-start justify-content-between chat-user"
                    id="chat_user_3" data-user-id="3">
                    <div class="d-flex align-items-center">
                      <span class="position-relative">
                        <img src="/assets/images/profile/user-8.jpg" alt="user-8" width="48" height="48"
                          class="rounded-circle" />
                        <span class="position-absolute bottom-0 end-0 p-1 badge rounded-pill bg-warning">
                          <span class="visually-hidden">New alerts</span>
                        </span>
                      </span>
                      <div class="ms-3 d-inline-block w-75">
                        <h6 class="mb-1 fw-semibold chat-title" data-username="James Anderson">
                          Andrew Johnson
                        </h6>
                        <span class="fs-3 text-truncate text-body-color d-block">Sent a photo</span>
                      </div>
                    </div>
                    <p class="fs-2 mb-0 text-muted">2 hrs</p>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="dark-transparent sidebartoggler"></div>
  <script src="/assets/js/vendor.min.js"></script>
  <!-- Import Js Files -->
  <script src="/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/libs/simplebar/dist/simplebar.min.js"></script>
  <script src="/assets/js/theme/app.init.js"></script>
  <script src="/assets/js/theme/theme.js"></script>
  <script src="/assets/js/theme/app.min.js"></script>
  <script src="/assets/js/theme/sidebarmenu.js"></script>

  <!-- solar icons -->
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
  <script src="/assets/js/apps/chat.js"></script>
  <script>
    window.onload = function () {
      var conteudo = document.getElementById('chat-box');
      conteudo.scrollTop = conteudo.scrollHeight;
    };
     </script>
</body>

</html>