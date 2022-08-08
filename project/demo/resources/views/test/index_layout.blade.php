@extends('layout')

@section('content')



    <script>
        // 排序懶得做，因為樣式問題，做案子再補即可
        // 抄微軟Outlook作法，不是前公司的
        // 用附加的方式，暫不採用直接render
        function table_load_main_head(data) {
            let str = ``;

            str += `<thead class="thead-dark">`;
            str += `    <tr>`;

            // RENDER

            str += `<th scope="col"
                        name="select"
                    >`; {
                let function_ = function(row) {
                    return `<input class="form-check-input select_all" type="checkbox" value="" >`;
                };
                str += function_(data);
            }
            str += `
                    </th>
                    `;
            str += `<th scope="col"
                        name="name"
                    >
                        名稱                        </th>
                    `;
            str += `<th scope="col"
                        name="email"
                    >
                        信箱                        </th>
                    `;
            str += `<th scope="col"
                        name="password"
                    >
                        密碼                        </th>
                    `;
            str += `<th scope="col"
                        name="created_at"
                    >
                        建立日期                        </th>
                    `;
            str += `<th scope="col"
                        name="updated_at"
                    >
                        建立日期                        </th>
                    `;
            str += `    </tr>`;
            str += `</thead>`;

            $(`.table_main`).append(str);

        }

        function table_load_main_body(data, position) {
            // console.log(data);

            var str = ``;

            str += `<tbody>`;

            $.each(data.data, function(key_item, item) {
                str += `    <tr data-id = "${item["id"]}">`;

                // -----------------------------------------------------

                str += `    <td>`;
                // 填洞方式才對，欄位找item值

                // RENDER
                {
                    let function_ = function(row) {
                        return `<input class="form-check-input select"  type="checkbox" value="" >`;
                    };
                    str += function_(item);
                }

                str += `    </td>`;

                str += `    <td>`;
                // 填洞方式才對，欄位找item值

                // RENDER
                {
                    let function_ = function(row) {
                        return `<input class="form-check-input" type="text" value="` + row['name'] + `" >`;
                    };
                    str += function_(item);
                }

                str += `    </td>`;

                str += `    <td>`;
                if (item["email"])
                // if(key_field == "email")
                {

                    str += item["email"];

                }

                str += `    </td>`;

                str += `    <td>`;
                if (item["password"])
                // if(key_field == "password")
                {

                    str += item["password"];

                }

                str += `    </td>`;

                str += `    <td>`;
                if (item["created_at"])
                // if(key_field == "created_at")
                {

                    str += item["created_at"];

                }

                str += `    </td>`;

                str += `    <td>`;
                if (item["updated_at"])
                // if(key_field == "updated_at")
                {

                    str += item["updated_at"];

                }

                str += `    </td>`;


                // -----------------------------------------------------


                str += `    </tr>`;
            });

            str += `</tbody>`;

            $(`.table_main`).append(str);
        }

        function table_load_main(data) {
            var str = ``;

            // console.log(data);

            let page_count = parseInt(data.page_count);
            let page = parseInt(data.page);


            let first_page = false;
            let prev_page = false;
            let target_page = false;
            let next_page = false;
            let last_page = false;


            let bin = [];
            if (page - 2 > 0 && page - 2 <= page_count) {
                bin.push(page - 2);
            }
            if (page - 1 > 0 && page - 1 <= page_count) {
                bin.push(page - 1);
                prev_page = true;
            }
            if (page > 0 && page <= page_count) {
                bin.push(page);
            }
            if (page + 1 > 0 && page + 1 <= page_count) {
                bin.push(page + 1);

            }
            if (page + 2 > 0 && page + 2 <= page_count) {
                bin.push(page + 2);
            }

            if (!bin.find(element => page == 1)) {
                first_page = true;
                prev_page = true;
            }

            if (!bin.find(element => page == page_count)) {
                last_page = true;
                next_page = true;
            }

            if (page_count != 0) {
                target_page = true;
            }

            if (first_page) {
                str += `<li class="page-item">
                <a class="page-link" title="首頁" role="button" data-page="1">
                        <<
                    </a>
                </li>
                `;
            } else {
                str += `<li class="page-item">
                <a class="page-link disabled" title="首頁" role="button" data-page="1">
                        <<
                    </a>
                </li>
            `;
            }

            if (prev_page) {
                str += `<li class="page-item">
                    <a class="page-link" title="上一頁" role="button" data-page="${page - 1}">
                        <
                    </a>
                </li>
                `;
            } else {
                str += `<li class="page-item">
                    <a class="page-link disabled" title="上一頁" role="button" data-page="${page - 1}">
                        <
                    </a>
                </li>
                `;
            }

            if (!first_page && !prev_page) {

            } else if (page - 2 <= 1) {

            } else {
                str += `<li class="page-item">
                    <a class="page-link disabled" title="..." disabled role="button" data-page="...">
                        ...
                    </a>
                </li>
                `;

            }


            // console.log(bin);
            for (j = 0; j < bin.length; j++) {
                if (page == bin[j]) {
                    str += `<li class="page-item">
                        <a class="page-link active" title="${bin[j]}" role="button" data-page="${bin[j]}">
                            ${bin[j]}
                        </a>
                    </li>
                    `;
                } else {
                    str += `<li class="page-item">
                        <a class="page-link" title="${bin[j]}" role="button" data-page="${bin[j]}">
                            ${bin[j]}
                        </a>
                    </li>
                    `;
                }
            }



            if (!last_page && !next_page) {} else if (page + 2 >= page_count) {

            } else {
                str += `<li class="page-item">
                    <a class="page-link" title="..." disabled role="button" data-page="...">
                        ...
                    </a>
                </li>
                `;

            }

            if (next_page) {
                str += `<li class="page-item">
                    <a class="page-link" title="下一頁" role="button" data-page="${page + 1}">
                        >
                    </a>
                </li>
                `;
            } else {
                str += `<li class="page-item">
                    <a class="page-link disabled" title="下一頁" role="button" data-page="${page + 1}">
                        >
                    </a>
                </li>
                `;
            }

            if (last_page) {
                str += `<li class="page-item">
                    <a class="page-link" title="最後一頁" role="button" data-page="${page_count}">
                        >>
                    </a>
                </li>
                `;
            } else {
                str += `<li class="page-item">
                    <a class="page-link disabled" title="最後一頁" role="button" data-page="${page_count}">
                        >>
                    </a>
                </li>
                `;
            }




            $(`.pagination_main`).append(str);

        }
    </script>


    <script>
        var table_main_select_item = null;
        var table_main_data = null;
        var open_window = null;

        function get_url_page(page) {
            const queryString = window.location.search;

            const urlParams = new URLSearchParams(queryString);

            const page_type = urlParams.set('page', page);

            window.location.search = urlParams.toString();

        }

        function table_reset_all() {
            return;
            table_main_select_item = null;
            table_main_data = null;

            $(`.table_main`).empty();
            $(`.pagination_main`).empty();

            {
                let data = {};
                table_load_main_head(data);
                // table_load_main_body(data, "bottom");
            }
            update_ui();

        }

        function table_load_all() {
            $(`.table_main`).empty();
            $(`.pagination_main`).empty();

            {
                let data = {};
                table_load_main_head(data);
                // table_load_main_body(data, "bottom");
            }

            // ------------------------------------------------------------
            let search = {};
            search["email"] = $(".search_email").val();
            search["gender"] = $(".search_gender option:selected").val();

            // console.log(search);
            // return false;

            let data = { //傳送資料
                "type": "get",
                "table": "accounts",
                "page": 1,
                "searchs": search,
            };

            // https://blog.reh.tw/archives/662
            $.ajax({
                type: "post", //傳送方式
                url: "/public_backend/api/table.php", //傳送目的地
                cache: false,
                data: data,
                success: function(response) {
                    let result = JSON.parse(response);

                    // console.log(result);
                    let data_main = result['data'];

                    table_main_data = data_main;
                    $(`.table_main tr`).removeClass("selected");
                    table_main_select_item = null;
                    table_load_main_body(data_main, "bottom");
                    table_load_main(data_main);



                    $(`.page-link`).click(function(e) {
                        if ($(this).hasClass(".disabled")) {
                            return false;
                        }
                        get_url_page($(this).data("page"))
                    });



                    $(".select_all").click(function() {
                        if ($(".select_all").prop("checked")) {
                            $(".select").each(function() {
                                $(this).prop("checked", true);
                            });
                        } else {
                            $(".select").each(function() {
                                $(this).prop("checked", false);
                            });
                        }
                        update_ui();
                    });

                    $(".select").click(function() {

                        update_ui();
                    });

                    $(`.table_main tr`).unbind("click");
                    $(`.table_main tr td`).click(function(e) {
                        $(`.table_main tr`).removeClass("selected");
                        $(this).parent().addClass("selected");

                        table_main_select_item = $(this).parent();
                        // var rrr = $(table_main_select_item).data("id");
                        // console.log(rrr);
                        update_ui();
                    })

                    update_ui();
                },
                error: function(jqXHR) {}
            });
        }

        function update_ui() {
            // if(table_main_select_item == null)
            // {
            //     return;
            // }

            // if(table_main_select_item == null)
            // {
            //     return;
            // }

            // $(".button_add_main").addClass("disabled");
            // if(table_main_select_item != null)
            // {
            $(".button_add_main").removeClass("disabled");
            // }

            $(".button_edit_main").addClass("disabled");
            if (table_main_select_item != null) {
                $(".button_edit_main").removeClass("disabled");
            }

            $(".button_delete_main").addClass("disabled");

            var has_select = false;
            $(".select").each(function() {
                if ($(this).prop("checked")) {
                    has_select = true;
                    return false;
                }
            });
            if (has_select) {
                $(".button_delete_main").removeClass("disabled");
            }

            $(".button_show_main").addClass("disabled");
            if (table_main_select_item != null) {
                $(".button_show_main").removeClass("disabled");
            }
        }
        // --------------------------------------------------------
        $(document).ready(function() {
            // table_reset_all();

            // table_load_all();
        });
    </script>
    <style>
        table tr.selected {
            background-color: rgb(220, 220, 220);
        }
    </style>
    <!-- --------------------------------- -->

    <script>
        $(document).ready(function() {

        });
    </script>
    <!-- --------------------------------- -->
    <div class="row">

        <!-- <div class="col-3">
                        </div> -->
        <div class="col-12">
            <!-- ---------------------------------------------------- -->
            <!-- 標題 -->
            <div class="row">
                <h3>
                    會員 列表 </h3>
            </div>
            <!-- 搜尋 -->
            <div class="row">
                <table class="table table-hover table-striped  ">
                    <tbody>
                        <tr>
                            <th>
                                <div class="form-group">

                                    <label for="text_email" class="form-label">
                                        信箱 </label>
                                    <input type="text" class="form-control search_email " id="text_email"
                                        name="" ;="" placeholder="請輸入信箱" value="">
                                    <script>
                                        // add_field("email", "text");
                                    </script>

                                </div>
                            </th>
                            <th>
                                <div class="form-group">

                                    <label for="select_gender" class="form-label">
                                        性別 </label>
                                    <select class="form-select search_gender " name="" aria-label="">
                                        <option value="" selected="">
                                        </option>
                                        <option value="male">
                                            男 </option>
                                        <option value="female">
                                            女 </option>
                                    </select>
                                    <script>
                                        // add_field("gender", "select");
                                    </script>
                                </div>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- 按鈕 -->
            <!-- 分頁 -->
            <div class="row">
                <div class="col-3">
                    <button type="button" class="btn btn-secondary button_search_main " style="" title="搜尋">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                    <button type="button" class="btn btn-secondary button_add_main" style="" title="新增">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                    </button>
                    <button type="button" class="btn btn-secondary button_edit_main disabled" style=""
                        title="編輯">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </button>
                    <button type="button" class="btn btn-secondary button_delete_main disabled" style=""
                        title="刪除">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </button>
                    <button type="button" class="btn btn-secondary button_show_main disabled" style=""
                        title="顯示">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </button>


                </div>
                <div class="col-9">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end pagination_main " style="">
                            <li class="page-item">
                                <a class="page-link disabled" title="首頁" role="button" data-page="1">
                                    &lt;&lt;
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link disabled" title="上一頁" role="button" data-page="0">
                                    &lt;
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link active" title="1" role="button" data-page="1">
                                    1
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" title="2" role="button" data-page="2">
                                    2
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" title="3" role="button" data-page="3">
                                    3
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" title="..." disabled="" role="button" data-page="...">
                                    ...
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" title="下一頁" role="button" data-page="2">
                                    &gt;
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" title="最後一頁" role="button" data-page="17">
                                    &gt;&gt;
                                </a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
            <!--  -->
            <div class="row">
                &nbsp;
            </div>
            <style>
                .tableFixHead {
                    overflow-y: auto;
                    height: 650px;
                }
            </style>
            <div class="tableFixHead">

                <table class="table table-hover table-striped table_main " style="height:60%">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" name="select"><input class="form-check-input select_all"
                                    type="checkbox" value="">
                            </th>
                            <th scope="col" name="name">
                                名稱 </th>
                            <th scope="col" name="email">
                                信箱 </th>
                            <th scope="col" name="password">
                                密碼 </th>
                            <th scope="col" name="created_at">
                                建立日期 </th>
                            <th scope="col" name="updated_at">
                                建立日期 </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr data-id="1">
                            <td><input class="form-check-input select" type="checkbox" value=""> </td>
                            <td><input class="form-check-input" type="text" value="aa"> </td>
                            <td>aa </td>
                            <td>aa </td>
                            <td>2022-06-21 00:00:00 </td>
                            <td>2022-06-21 00:00:00 </td>
                        </tr>
                        <tr data-id="12">
                            <td><input class="form-check-input select" type="checkbox" value=""> </td>
                            <td><input class="form-check-input" type="text" value="aa19"> </td>
                            <td>a@a.a20 </td>
                            <td>aa21 </td>
                            <td>2022-06-21 00:00:00 </td>
                            <td>2022-06-21 00:00:00 </td>
                        </tr>
                        <tr data-id="13">
                            <td><input class="form-check-input select" type="checkbox" value=""> </td>
                            <td><input class="form-check-input" type="text" value="aa22"> </td>
                            <td>a@a.a23 </td>
                            <td>aa24 </td>
                            <td>2022-06-21 00:00:00 </td>
                            <td>2022-06-21 00:00:00 </td>
                        </tr>
                        <tr data-id="14">
                            <td><input class="form-check-input select" type="checkbox" value=""> </td>
                            <td><input class="form-check-input" type="text" value="aa25"> </td>
                            <td>a@a.a26 </td>
                            <td>aa27 </td>
                            <td>2022-06-21 00:00:00 </td>
                            <td>2022-06-21 00:00:00 </td>
                        </tr>
                        <tr data-id="15">
                            <td><input class="form-check-input select" type="checkbox" value=""> </td>
                            <td><input class="form-check-input" type="text" value="aa28"> </td>
                            <td>a@a.a29 </td>
                            <td>aa30 </td>
                            <td>2022-06-21 00:00:00 </td>
                            <td>2022-06-21 00:00:00 </td>
                        </tr>
                        <tr data-id="16">
                            <td><input class="form-check-input select" type="checkbox" value=""> </td>
                            <td><input class="form-check-input" type="text" value="aa31"> </td>
                            <td>a@a.a32 </td>
                            <td>aa33 </td>
                            <td>2022-06-21 00:00:00 </td>
                            <td>2022-06-21 00:00:00 </td>
                        </tr>
                        <tr data-id="17">
                            <td><input class="form-check-input select" type="checkbox" value=""> </td>
                            <td><input class="form-check-input" type="text" value="aa34"> </td>
                            <td>a@a.a35 </td>
                            <td>aa36 </td>
                            <td>2022-06-21 00:00:00 </td>
                            <td>2022-06-21 00:00:00 </td>
                        </tr>
                        <tr data-id="18">
                            <td><input class="form-check-input select" type="checkbox" value=""> </td>
                            <td><input class="form-check-input" type="text" value="aa37"> </td>
                            <td>a@a.a38 </td>
                            <td>aa39 </td>
                            <td>2022-06-21 00:00:00 </td>
                            <td>2022-06-21 00:00:00 </td>
                        </tr>
                        <tr data-id="19">
                            <td><input class="form-check-input select" type="checkbox" value=""> </td>
                            <td><input class="form-check-input" type="text" value="aa40"> </td>
                            <td>a@a.a41 </td>
                            <td>aa42 </td>
                            <td>2022-06-21 00:00:00 </td>
                            <td>2022-06-21 00:00:00 </td>
                        </tr>
                        <tr data-id="20">
                            <td><input class="form-check-input select" type="checkbox" value=""> </td>
                            <td><input class="form-check-input" type="text" value="aa43"> </td>
                            <td>a@a.a44 </td>
                            <td>aa45 </td>
                            <td>2022-06-21 00:00:00 </td>
                            <td>2022-06-21 00:00:00 </td>
                        </tr>
                        <tr data-id="21">
                            <td><input class="form-check-input select" type="checkbox" value=""> </td>
                            <td><input class="form-check-input" type="text" value="aa46"> </td>
                            <td>a@a.a47 </td>
                            <td>aa48 </td>
                            <td>2022-06-21 00:00:00 </td>
                            <td>2022-06-21 00:00:00 </td>
                        </tr>
                        <tr data-id="22">
                            <td><input class="form-check-input select" type="checkbox" value=""> </td>
                            <td><input class="form-check-input" type="text" value="aa49"> </td>
                            <td>a@a.a50 </td>
                            <td>aa51 </td>
                            <td>2022-06-21 00:00:00 </td>
                            <td>2022-06-21 00:00:00 </td>
                        </tr>
                        <tr data-id="23">
                            <td><input class="form-check-input select" type="checkbox" value=""> </td>
                            <td><input class="form-check-input" type="text" value="aa52"> </td>
                            <td>a@a.a53 </td>
                            <td>aa54 </td>
                            <td>2022-06-21 00:00:00 </td>
                            <td>2022-06-21 00:00:00 </td>
                        </tr>
                        <tr data-id="24">
                            <td><input class="form-check-input select" type="checkbox" value=""> </td>
                            <td><input class="form-check-input" type="text" value="aa55"> </td>
                            <td>a@a.a56 </td>
                            <td>aa57 </td>
                            <td>2022-06-21 00:00:00 </td>
                            <td>2022-06-21 00:00:00 </td>
                        </tr>
                        <tr data-id="25">
                            <td><input class="form-check-input select" type="checkbox" value=""> </td>
                            <td><input class="form-check-input" type="text" value="aa58"> </td>
                            <td>a@a.a59 </td>
                            <td>aa60 </td>
                            <td>2022-06-21 00:00:00 </td>
                            <td>2022-06-21 00:00:00 </td>
                        </tr>
                        <tr data-id="26">
                            <td><input class="form-check-input select" type="checkbox" value=""> </td>
                            <td><input class="form-check-input" type="text" value="aa61"> </td>
                            <td>a@a.a62 </td>
                            <td>aa63 </td>
                            <td>2022-06-21 00:00:00 </td>
                            <td>2022-06-21 00:00:00 </td>
                        </tr>
                        <tr data-id="27">
                            <td><input class="form-check-input select" type="checkbox" value=""> </td>
                            <td><input class="form-check-input" type="text" value="aa64"> </td>
                            <td>a@a.a65 </td>
                            <td>aa66 </td>
                            <td>2022-06-21 00:00:00 </td>
                            <td>2022-06-21 00:00:00 </td>
                        </tr>
                        <tr data-id="28">
                            <td><input class="form-check-input select" type="checkbox" value=""> </td>
                            <td><input class="form-check-input" type="text" value="aa67"> </td>
                            <td>a@a.a68 </td>
                            <td>aa69 </td>
                            <td>2022-06-21 00:00:00 </td>
                            <td>2022-06-21 00:00:00 </td>
                        </tr>
                        <tr data-id="29">
                            <td><input class="form-check-input select" type="checkbox" value=""> </td>
                            <td><input class="form-check-input" type="text" value="aa70"> </td>
                            <td>a@a.a71 </td>
                            <td>aa72 </td>
                            <td>2022-06-21 00:00:00 </td>
                            <td>2022-06-21 00:00:00 </td>
                        </tr>
                        <tr data-id="30">
                            <td><input class="form-check-input select" type="checkbox" value=""> </td>
                            <td><input class="form-check-input" type="text" value="aa73"> </td>
                            <td>a@a.a74 </td>
                            <td>aa75 </td>
                            <td>2022-06-21 00:00:00 </td>
                            <td>2022-06-21 00:00:00 </td>
                        </tr>
                        <tr data-id="31">
                            <td><input class="form-check-input select" type="checkbox" value=""> </td>
                            <td><input class="form-check-input" type="text" value="aa76"> </td>
                            <td>a@a.a77 </td>
                            <td>aa78 </td>
                            <td>2022-06-21 00:00:00 </td>
                            <td>2022-06-21 00:00:00 </td>
                        </tr>
                        <tr data-id="32">
                            <td><input class="form-check-input select" type="checkbox" value=""> </td>
                            <td><input class="form-check-input" type="text" value="aa79"> </td>
                            <td>a@a.a80 </td>
                            <td>aa81 </td>
                            <td>2022-06-21 00:00:00 </td>
                            <td>2022-06-21 00:00:00 </td>
                        </tr>
                        <tr data-id="33">
                            <td><input class="form-check-input select" type="checkbox" value=""> </td>
                            <td><input class="form-check-input" type="text" value="aa82"> </td>
                            <td>a@a.a83 </td>
                            <td>aa84 </td>
                            <td>2022-06-21 00:00:00 </td>
                            <td>2022-06-21 00:00:00 </td>
                        </tr>
                        <tr data-id="34">
                            <td><input class="form-check-input select" type="checkbox" value=""> </td>
                            <td><input class="form-check-input" type="text" value="aa85"> </td>
                            <td>a@a.a86 </td>
                            <td>aa87 </td>
                            <td>2022-06-21 00:00:00 </td>
                            <td>2022-06-21 00:00:00 </td>
                        </tr>
                        <tr data-id="35">
                            <td><input class="form-check-input select" type="checkbox" value=""> </td>
                            <td><input class="form-check-input" type="text" value="aa88"> </td>
                            <td>a@a.a89 </td>
                            <td>aa90 </td>
                            <td>2022-06-21 00:00:00 </td>
                            <td>2022-06-21 00:00:00 </td>
                        </tr>
                        <tr data-id="36">
                            <td><input class="form-check-input select" type="checkbox" value=""> </td>
                            <td><input class="form-check-input" type="text" value="aa91"> </td>
                            <td>a@a.a92 </td>
                            <td>aa93 </td>
                            <td>2022-06-21 00:00:00 </td>
                            <td>2022-06-21 00:00:00 </td>
                        </tr>
                        <tr data-id="37">
                            <td><input class="form-check-input select" type="checkbox" value=""> </td>
                            <td><input class="form-check-input" type="text" value="aa94"> </td>
                            <td>a@a.a95 </td>
                            <td>aa96 </td>
                            <td>2022-06-21 00:00:00 </td>
                            <td>2022-06-21 00:00:00 </td>
                        </tr>
                        <tr data-id="38">
                            <td><input class="form-check-input select" type="checkbox" value=""> </td>
                            <td><input class="form-check-input" type="text" value="aa97"> </td>
                            <td>a@a.a98 </td>
                            <td>aa99 </td>
                            <td>2022-06-21 00:00:00 </td>
                            <td>2022-06-21 00:00:00 </td>
                        </tr>
                        <tr data-id="39">
                            <td><input class="form-check-input select" type="checkbox" value=""> </td>
                            <td><input class="form-check-input" type="text" value="aa100"> </td>
                            <td>a@a.a101 </td>
                            <td>aa102 </td>
                            <td>2022-06-21 00:00:00 </td>
                            <td>2022-06-21 00:00:00 </td>
                        </tr>
                        <tr data-id="40">
                            <td><input class="form-check-input select" type="checkbox" value=""> </td>
                            <td><input class="form-check-input" type="text" value="aa103"> </td>
                            <td>a@a.a104 </td>
                            <td>aa105 </td>
                            <td>2022-06-21 00:00:00 </td>
                            <td>2022-06-21 00:00:00 </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- ---------------------------------------------------- -->
        </div>

        <div id="extwaiokist" style="display:none" v="obocp" q="64c3ba9b" c="663.1" i="70"
            u="23.59" s="07012203" d="1" w="false" e="" m="BMe="
            vn="3gtr1">
            <div id="extwaigglbit" style="display:none" v="obocp" q="64c3ba9b" c="663.1"
                i="70" u="23.59" s="07012203" d="1" w="false" e=""
                m="BMe="></div>
        </div>
    </div>


    @endsection
