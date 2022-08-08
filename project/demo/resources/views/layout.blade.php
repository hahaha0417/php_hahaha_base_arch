<!DOCTYPE html>
<html>

<head>
    <!-- meta -->
    <!-- css -->
    <link rel="stylesheet" href="/asset/plugin/\bootstrap\dist\css\bootstrap.css?v=1.0.0" type="text/css">
    <link rel="stylesheet" href="/asset/plugin/\sweetalert2\dist\sweetalert2.css?v=1.0.0" type="text/css">
    <link rel="stylesheet" href="/asset/plugin/font-awesome\css\font-awesome.css?v=1.0.0" type="text/css"> <!-- js -->
    <script type="text/javascript" src="/asset/plugin/\jquery\dist\jquery.js?v=1.0.0" \="">
        \
    </script>
    <script type="text/javascript" src="/asset/plugin/\bootstrap\dist\js\bootstrap.bundle.js?v=1.0.0" \="">
        \
    </script>
    <script type="text/javascript" src="/asset/plugin/\sweetalert2\dist\sweetalert2.js?v=1.0.0" \="">
        \
    </script>
    <title>
        會員 列表 </title>
</head>

<body>
    <!-- --------------------------------- -->
    <header class="p-3 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li>
                        <a href="#" class="nav-link px-2 text-secondary">
                            首頁
                        </a>
                    </li>

                    <li>
                        <a href="#" class="nav-link px-2 text-white">
                            {{ __('home.home') }} - 翻譯
                        </a>
                    </li>
                    <!-- <li>
                        <a href="#" class="nav-link px-2 text-white">
                            產品
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-2 text-white">
                            報名
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-2 text-white">
                            備份
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-2 text-white">
                            關於我
                        </a>
                    </li> -->
                </ul>

                <!-- <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                    <input type="search" class="form-control form-control-dark text-white bg-dark" placeholder="Search..." aria-label="Search">
                </form> -->

                <!-- <div class="text-end">
                    <button type="button" class="btn btn-outline-light me-2">
                        登入
                    </button>
                    <button type="button" class="btn btn-warning">
                        登出
                    </button>
                </div> -->
            </div>
        </div>
    </header>
    <script>
        // $( document ).ready(function() {
        //     Swal.fire(
        //         'The Internet?',
        //         'That thing is still around?',
        //         'question'
        //     )
        // });
    </script>


    <x-card title="標題">
        {{-- https://tools.wingzero.tw/article/sn/618 --}}
        {{-- 這樣在 x-slot 就會插入的 footer 內，而沒有用 x-slot 的標籤標示的部分，則會插入到沒有名字的 slot 內，所以以這個範例來說 this is footer 是會在 hello component 下面的。 --}}
        <x-slot name="footer">this is footer</x-slot>
        {{-- 裡面是$slot --}}
        hello component
    </x-card>


    @hasSection('content')
        @yield('content')
    @endif

    <!-- --------------------------------- -->
    <div class="" style="background-color: rgb(190,255,190);">
        <footer class="py-3">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item">
                    <!-- <a href="#" class="nav-link px-2 text-muted">
                        首頁
                    </a> -->
                </li>
                <li class="nav-item">
                    <!-- <a href="#" class="nav-link px-2 text-muted">
                        會員
                    </a> -->
                </li>
                <li class="nav-item">
                    <!-- <a href="#" class="nav-link px-2 text-muted">
                        報名
                    </a> -->
                </li>
                <li class="nav-item">
                    <!-- <a href="#" class="nav-link px-2 text-muted">
                        備份
                    </a> -->
                </li>
                <li class="nav-item">
                    <!-- <a href="#" class="nav-link px-2 text-muted">
                        關於我
                    </a> -->
                    關於我
                </li>
            </ul>
            <p class="text-center text-muted">
                © 2022 hahaha
            </p>
        </footer>
    </div>


    <script>
        $(document).ready(function() {



            // 搜尋
            $(".button_search_main").click(function() {
                // if(table_main_select_item == null)
                // {
                //     return;
                // }

                // let id = $(table_main_select_item).data("id");

                table_load_all();
            });

            // 關閉
            $(".button_close_main").click(function() {
                // if(table_main_select_item == null)
                // {
                //     return;
                // }

                let id = $(table_main_select_item).data("id");

                window.close();
            });

            // 新增
            $(".button_add_main").click(function() {
                // if(table_main_select_item == null)
                // {
                //     return;
                // }

                let id = $(table_main_select_item).data("id");
                let url = `/backend/accounts/add`
                // location.href = url;
                open_window = window.open(url, "accounts_index");
            });

            // 編輯
            $(".button_edit_main").click(function() {
                if (table_main_select_item == null) {
                    return;
                }

                let id = $(table_main_select_item).data("id");

                let url = `/backend/accounts/id/${id}/edit`;
                // location.href = url;
                open_window = window.open(url, "accounts_index");
            });

            // 刪除
            $(".button_delete_main").click(function() {
                if (table_main_select_item == null) {
                    return;
                }

                var ids = [];
                $(".select").each(function() {
                    if ($(this).prop("checked")) {
                        let id = $(this).parent().parent().data("id");

                        ids.push(id);
                    }
                });

                if (ids.length == 0) {
                    return false;
                }

                Swal.fire({
                    title: '確定刪除?',
                    showCancelButton: true,
                    confirmButtonText: '刪除',
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {

                        let data = { //傳送資料
                            "type": "delete",
                            "table": "accounts",
                            "data": {
                                "ids": ids
                            }
                        };
                        // https://blog.reh.tw/archives/662
                        $.ajax({
                            type: "post", //傳送方式
                            url: "/public_backend/api/table.php", //傳送目的地
                            cache: false,
                            data: data,
                            success: function(response) {
                                let result = JSON.parse(response);
                                Swal.fire('刪除成功', '', '');
                                table_load_all();
                                update_ui();


                            },
                            error: function(jqXHR) {}
                        });

                    }
                });

            });

            // 顯示
            $(".button_show_main").click(function() {
                if (table_main_select_item == null) {
                    return;
                }

                let id = $(table_main_select_item).data("id");

                let url = `/backend/accounts/id/${id}/show`;
                // location.href = url;
                open_window = window.open(url, "accounts_index");
            });

            // https://ithelp.ithome.com.tw/articles/10268300?sc=iThelpR
            window.addEventListener("message", (event) => {
                // console.log(event.data);
                table_load_all();
            }, false);
        });
    </script>
    <!-- --------------------------------- -->


</body>

</html>
