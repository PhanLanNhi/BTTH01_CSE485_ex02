<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W3CMS</title>
    <link rel="stylesheet" href="./bootstrap.min.css">
    <link rel="stylesheet" href="./icons-1.11.0/icons-1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./asset/style.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Nav left-->
            <div class="nav__left col-md-2 bg-white ">
                <div class="logo d-flex p-4 gap-1">
                    <img src="./asset/img/logo1.png" alt="" style = "width: 60px; height: 40px">
                    <img src="./asset/img/logo2.png" alt="" style = "width: 118px; height: 40px">
                </div>
                <ul class="nav flex-column d-flex justify-content-between">
                    <li class="nav__item">
                        <a class="nav__link" href="#">
                            <i class="nav__item-icon bi bi-person"></i>
                            User
                            <span class="nav__item-warrap ms-3 p-1">Modules</span>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="#">
                            <i class="nav__item-icon bi bi-box-seam"></i>
                            CMS
                            <span class="nav__item-warrap ms-3 p-1">Modules</span>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="#">
                            <i class="nav__item-icon bi bi-gear"></i>
                            Config
                            <span class="nav__item-warrap ms-3 p-1">Modules</span>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="#"><i class="nav__item-icon bi bi-grid"></i>Dashboard</a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="#"><i class="nav__item-icon bi bi-book"></i>Courses</a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="#"><i class="nav__item-icon bi bi-people"></i>Instructor</a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="#"><i class="nav__item-icon bi bi-info-circle"></i>Apps</a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="#"><i class="nav__item-icon bi bi-pie-chart"></i>Charts</a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="#"><i class="nav__item-icon bi bi-star"></i>Bootstrap</a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="#"><i class="nav__item-icon bi bi-heart"></i>Plugins</a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="#"><i class="nav__item-icon bi bi-gear-wide"></i>Widget</a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="#"><i class="nav__item-icon bi bi-file-earmark-check"></i>Forms</a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="#"><i class="nav__item-icon bi bi-file-earmark-spreadsheet"></i>Table</a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="#"><i class="nav__item-icon bi bi-file-earmark-break"></i>Pages</a>
                    </li>
                    </ul>

                    <div class="nav__footer">
                        <span>Made with</span>
                        <i class="bi bi-heart-fill"></i>
                        <span>by DexignZone</span>
                    </div>
            </div>


            <!-- Main -->
            <div class="col-md-9" style="background-color: #eee;">
                    <div class="main ms-4 me-4">
                        <!-- header -->
                        <div class="main__header">
                            <div class="row">
                                <div class="header d-flex h-100 mt-4">
                                    <div class="col-md-6">
                                        <div class="header__left d-flex gap-4">
                                            <a href="#"><i class="header__left-icon bi bi-list text-decoration-none"></i></a>
                                            <span class="header__left-title">Users</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="header__right d-flex gap-2 justify-content-end align-items-center">
                                            <div class="header__group px-3 py-2">
                                                <a href=""><i class="header__right-icon fa-solid fa-magnifying-glass"></i></a>
                                                <input class="bord__out header__input p-1" type="text" placeholder="Search here...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- filter -->
                        <div class="main__filter bg-white mb-3">
                            <div class="filter__header mt-4 d-flex justify-content-between">
                                <button class="bord__out btn__left bg-white">Filter</button>
                                <button class="bord__out btn__right"><i class="bi bi-chevron-up text-white"></i></button>
                            </div>
                            <div class="filter__body mt-3">
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="filter__left d-flex align-items-center">
                                            <input class="filter__input me-4 px-3 py-2" type="email" placeholder="Email">
                                            <input class="filter__input me-4 px-3 py-2" type="number" placeholder="Mobile">
                                            <select class="filter__input me-4 px-3 py-2" name="" id="">
                                                <option value="sel">Select Group</option>
                                                <option value="adm">Admin</option>
                                                <option value="mgr">Manager</option>
                                                <option value="cus">Customer</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="filter__right d-flex align-items-center justify-content-between">
                                            <button class="btn bord__out filter__search"><i class="fa-solid fa-magnifying-glass me-1"></i>Filter</button>
                                            <button class="btn btn__hover bord__out filter__clear bg-white">Clear</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- users -->
                        <div class="main__users bg-white h-100 px-4 pb-2">
                            <div class="row">
                                <div class="users__header d-flex align-items-center justify-content-between mb-3 p-4">
                                    <div class="col-md-9">
                                        <div class="users__left">
                                            <span class="btn__left">Users</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="users__right d-flex">
                                            <button class="btn btn__hover users__delete">Delete</button>
                                            <a href="add_users.php" class="btn btn__hover bord__out users__add text-uppercase ms-1">
                                                <span>Add user</span>
                                                <i class="fa-solid fa-plus ms-2"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="users__content">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <!-- t doi terminal nhe, nhin cai nay kho nhin qua -->
                                            <th style="padding-left:16px;"><input class="users__check" type="checkbox" name="" id=""></th>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Gender</th>
                                            <th>Groups</th>
                                            <th>Mobile</th>
                                            <th>Date Of Birth</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                          </tr>
                                    </thead>
                                    <tbody class="tbody">
                                        <tr>
                                            <td><input class="users__check" type="checkbox" name="" id=""></td>
                                            <td><img class="users__img me-2" style="width: 26px; height: 26px;" src="./asset/img/6.jpg" alt="">Yan Yan</td>
                                            <td>yan777@gmail.com</td>
                                            <td>Male</td>
                                            <td><span class="label__groups">Manager</span></td>
                                            <td>2385837777</td>
                                            <td>13/12/2003</td>
                                            <td><i class="status__icon bi bi-circle-fill"></i></td>
                                            <td>
                                                <a href="#"><i class="ac__icon ac__shield bi bi-shield-shaded "></i></a>
                                                <a href="#"><i class="ac__icon ac__pen bi bi-pencil-fill "></i></a>
                                                <a href="#"><i class="ac__icon ac__trash bi bi-trash-fill "></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input class="users__check" type="checkbox" name="" id=""></td>
                                            <td><img class="users__img me-2" style="width: 26px; height: 26px;" src="./asset/img/6.jpg" alt="">Yan Yan</td>
                                            <td>yan777@gmail.com</td>
                                            <td>Male</td>
                                            <td><span class="label__groups">Manager</span></td>
                                            <td>2385837777</td>
                                            <td>13/12/2003</td>
                                            <td><i class="status__icon bi bi-circle-fill"></i></td>
                                            <td>
                                                <a href="#"><i class="ac__icon ac__shield bi bi-shield-shaded "></i></a>
                                                <a href="#"><i class="ac__icon ac__pen bi bi-pencil-fill "></i></a>
                                                <a href="#"><i class="ac__icon ac__trash bi bi-trash-fill "></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input class="users__check" type="checkbox" name="" id=""></td>
                                            <td><img class="users__img me-2" style="width: 26px; height: 26px;" src="./asset/img/6.jpg" alt="">Yan Yan</td>
                                            <td>yan777@gmail.com</td>
                                            <td>Male</td>
                                            <td><span class="label__groups">Manager</span></td>
                                            <td>2385837777</td>
                                            <td>13/12/2003</td>
                                            <td><i class="status__icon bi bi-circle-fill"></i></td>
                                            <td>
                                                <a href="#"><i class="ac__icon ac__shield bi bi-shield-shaded "></i></a>
                                                <a href="#"><i class="ac__icon ac__pen bi bi-pencil-fill "></i></a>
                                                <a href="#"><i class="ac__icon ac__trash bi bi-trash-fill "></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input class="users__check" type="checkbox" name="" id=""></td>
                                            <td><img class="users__img me-2" style="width: 26px; height: 26px;" src="./asset/img/6.jpg" alt="">Yan Yan</td>
                                            <td>yan777@gmail.com</td>
                                            <td>Male</td>
                                            <td><span class="label__groups">Admin</span></td>
                                            <td>2385837777</td>
                                            <td>13/12/2003</td>
                                            <td><i class="status__icon bi bi-circle-fill"></i></td>
                                            <td>
                                                <a href="#"><i class="ac__icon ac__shield bi bi-shield-shaded "></i></a>
                                                <a href="#"><i class="ac__icon ac__pen bi bi-pencil-fill "></i></a>
                                                <a href="#"><i class="ac__icon ac__trash bi bi-trash-fill "></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input class="users__check" type="checkbox" name="" id=""></td>
                                            <td><img class="users__img me-2" style="width: 26px; height: 26px;" src="./asset/img/6.jpg" alt="">Yan Yan</td>
                                            <td>yan777@gmail.com</td>
                                            <td>Male</td>
                                            <td><span class="label__groups">Manager</span></td>
                                            <td>2385837777</td>
                                            <td>13/12/2003</td>
                                            <td><i class="status__icon bi bi-circle-fill"></i></td>
                                            <td>
                                                <a href="#"><i class="ac__icon ac__shield bi bi-shield-shaded "></i></a>
                                                <a href="#"><i class="ac__icon ac__pen bi bi-pencil-fill "></i></a>
                                                <a href="#"><i class="ac__icon ac__trash bi bi-trash-fill "></i></a>
                                            </td>
                                        </tr>
                                        
                                        
                                        
                                    </tbody>
                                  </table>  
                            </div>
                            <div class="users__footer mt-4">
                                <div class="row">
                                    <div class="col-md-9">
                                        <span class="nav__footer">Page 1 of 4.</span>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="users__footer-right">
                                            <ul class="users__footer-page d-flex list-unstyled">
                                                <li><a class="text-decoration-none" href="#"><i class="fa-solid fa-angle-left"></i></a></li>
                                                <li><a class="text-decoration-none" href="#">1</a></li>
                                                <li><a class="text-decoration-none" href="#">2</a></li>
                                                <li><a class="text-decoration-none" href="#">3</a></li>
                                                <li><a class="text-decoration-none" href="#"><i class="fa-solid fa-angle-right"></i></a></li>
                                            
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            <!-- Nav right -->
            <div class="col-md-1">
                <div class="nav__right mt-4 vh-100 d-flex flex-column justify-content-between align-items-center">
                    <div class="nav__right-header">
                        <a class="" href="#"><img class="nav__img" src="./asset/img/anh-chill-hinh-chill-lofi-buon-dep-4.jpg" alt=""></a>
                    </div>
                    <div class="nav__right-mid d-flex flex-column">
                        <button class="btn__tool"><i class="btn__tool-icon bi bi-gear-fill"></i></button>
                        <button class="btn__tool"><i class="btn__tool-icon bi bi-envelope-fill"></i></button>
                        <button class="btn__tool"><i class="btn__tool-icon bi bi-bell-fill"></i></button>
                    </div>
                    <div class="nav__right-footer d-flex flex-column gap-2">
                        <img src="./asset/img/en.png" alt="">
                        <span>en<i class="fa-solid fa-chevron-down"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>