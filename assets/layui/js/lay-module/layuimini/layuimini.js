

layui.define(["element", "jquery"], function (exports) {
    var element = layui.element,
        $ = layui.$,
        layer = layui.layer;

    if (!/http(s*):\/\//.test(location.href)) {
        return layer.alert("webコンテナ(ac pa p /Tomcat/Nginx/IIS/など)にプロジェクトを配置してください。そうしないと、データの一部が表示されません");
    }

    layuimini = new function () {

        /**
         * 
         * @param name
         * @returns {{BgColorDefault: number, urlSuffixDefault: boolean}|*}
         */
        this.config = function (name) {

            var config = {
                urlHashLocation: true,   
                urlSuffixDefault: true, 
                BgColorDefault: 0,       
                checkUrlDefault: false,  
            };

            if (name == undefined) {
                return config;
            } else {
                return config[name];
            }
        };

        /**
         * 
         * @param url
         */
        this.init = function (url) {
            var loading = layer.load(0, {shade: false, time: 2 * 1000});
            layuimini.initBgColor();
            layuimini.initDevice();
            $.getJSON(url, function (data, status) {
                if (data == null) {
                    layuimini.msg_error('メニュー情報なし');
                } else {
                    layuimini.initHome(data.homeInfo);
                    layuimini.initLogo(data.logoInfo);
                    layuimini.initClear(data.clearInfo);
                    layuimini.initMenu(data.menuInfo);
                    layuimini.initTab();
                }
            }).fail(function () {
                layuimini.msg_error('メニューインターフェースが間違っている');
            });
            layer.close(loading);
        };

        /**
         * 
         */
        this.initDevice = function () {
            if (layuimini.checkMobile()) {
                $('.layuimini-tool i').attr('data-side-fold', 0);
                $('.layuimini-tool i').attr('class', 'fa fa-indent');
                $('.layui-layout-body').attr('class', 'layui-layout-body layuimini-mini');
            }
        };

        /**
         * 
         * @param data
         */
        this.initHome = function (data) {
            sessionStorage.setItem('layuiminiHomeHref', data.href);
            $('#layuiminiHomeTabId').html('<i class="' + data.icon + '"></i> <span>' + data.title + '</span>');
            $('#layuiminiHomeTabId').attr('lay-id', data.href);
            $('#layuiminiHomeTabIframe').html('<iframe width="100%" height="100%" frameborder="0"  src="' + data.href + '"></iframe>');
        };

        /**
         * 
         * @param data
         */
        this.initLogo = function (data) {
            var html = '<a href="' + data.href + '">\n' +
                '<img src="' + data.image + '" alt="logo">\n' +
                '<h1>' + data.title + '</h1>\n' +
                '</a>';
            $('.layui-layout-admin .layui-logo').html(html);
        };

        /**
         * 
         * @param data
         */
        this.initClear = function (data) {
            $('.layuimini-clear').attr('data-href', data.clearUrl);
        };

        /**
         * 
         */
        this.initBgColor = function () {
            var bgcolorId = sessionStorage.getItem('layuiminiBgcolorId');
            if (bgcolorId == null || bgcolorId == undefined || bgcolorId == '') {
                bgcolorId = layuimini.config('BgColorDefault');
            }
            var bgcolorData = layuimini.bgColorConfig(bgcolorId);
            var styleHtml = '.layui-layout-admin .layui-header{background-color:' + bgcolorData.headerRight + '!important;}\n' +
                '.layui-header>ul>.layui-nav-item.layui-this,.layuimini-tool i:hover{background-color:' + bgcolorData.headerRightThis + '!important;}\n' +
                '.layui-layout-admin .layui-logo {background-color:' + bgcolorData.headerLogo + '!important;}\n' +
                '.layui-side.layui-bg-black,.layui-side.layui-bg-black>.layui-left-menu>ul {background-color:' + bgcolorData.menuLeft + '!important;}\n' +
                '.layui-left-menu .layui-nav .layui-nav-child a:hover:not(.layui-this) {background-color:' + bgcolorData.menuLeftHover + ';}\n' +
                '.layui-layout-admin .layui-nav-tree .layui-this, .layui-layout-admin .layui-nav-tree .layui-this>a, .layui-layout-admin .layui-nav-tree .layui-nav-child dd.layui-this, .layui-layout-admin .layui-nav-tree .layui-nav-child dd.layui-this a {\n' +
                '    background-color: ' + bgcolorData.menuLeftThis + ' !important;\n' +
                '}';
            $('#layuimini-bg-color').html(styleHtml);
        };

        /**
         * 
         * @param data
         */
        this.initMenu = function (data) {
            var headerMenuHtml = '',
                headerMobileMenuHtml = '',
                leftMenuHtml = '',
                headerMenuCheckDefault = 'layui-this',
                leftMenuCheckDefault = 'layui-this';
            window.menuParameId = 1;

            $.each(data, function (key, val) {
                headerMenuHtml += '<li class="layui-nav-item ' + headerMenuCheckDefault + '" id="' + key + 'HeaderId" data-menu="' + key + '"> <a href="javascript:;"><i class="' + val.icon + '"></i> ' + val.title + '</a> </li>\n';
                headerMobileMenuHtml += '<dd><a href="javascript:;" id="' + key + 'HeaderId" data-menu="' + key + '"><i class="' + val.icon + '"></i> ' + val.title + '</a></dd>\n';
                leftMenuHtml += '<ul class="layui-nav layui-nav-tree layui-left-nav-tree ' + leftMenuCheckDefault + '" id="' + key + '">\n';
                var menuList = val.child;
                $.each(menuList, function (index, menu) {
                    leftMenuHtml += '<li class="layui-nav-item">\n';
                    if (menu.child != undefined && menu.child != []) {
                        leftMenuHtml += '<a href="javascript:;" class="layui-menu-tips" ><i class="' + menu.icon + '"></i><span class="layui-left-nav"> ' + menu.title + '</span> </a>';
                        var buildChildHtml = function (html, child, menuParameId) {
                            html += '<dl class="layui-nav-child">\n';
                            $.each(child, function (childIndex, childMenu) {
                                html += '<dd>\n';
                                if (childMenu.child != undefined && childMenu.child != []) {
                                    html += '<a href="javascript:;" class="layui-menu-tips" ><i class="' + childMenu.icon + '"></i><span class="layui-left-nav"> ' + childMenu.title + '</span></a>';
                                    html = buildChildHtml(html, childMenu.child, menuParameId);
                                } else {
                                    html += '<a href="javascript:;" class="layui-menu-tips" data-type="tabAdd"  data-tab-mpi="m-p-i-' + menuParameId + '" data-tab="' + childMenu.href + '" target="' + childMenu.target + '"><i class="' + childMenu.icon + '"></i><span class="layui-left-nav"> ' + childMenu.title + '</span></a>\n';
                                    menuParameId++;
                                    window.menuParameId = menuParameId;
                                }
                                html += '</dd>\n';
                            });
                            html += '</dl>\n';
                            return html;
                        };
                        leftMenuHtml = buildChildHtml(leftMenuHtml, menu.child, menuParameId);
                    } else {
                        leftMenuHtml += '<a href="javascript:;" class="layui-menu-tips"  data-type="tabAdd" data-tab-mpi="m-p-i-' + menuParameId + '" data-tab="' + menu.href + '" target="' + menu.target + '"><i class="' + menu.icon + '"></i><span class="layui-left-nav"> ' + menu.title + '</span></a>\n';
                        menuParameId++;
                    }
                    leftMenuHtml += '</li>\n';
                });
                leftMenuHtml += '</ul>\n';
                headerMenuCheckDefault = '';
                leftMenuCheckDefault = 'layui-hide';
            });
            $('.layui-header-pc-menu').html(headerMenuHtml); 
            $('.layui-header-mini-menu').html(headerMobileMenuHtml); 
            $('.layui-left-menu').html(leftMenuHtml);
            element.init();
        };

        /**
         * 
         */
        this.initTab = function () {
            var locationHref = window.location.href;
            var urlArr = locationHref.split("#");
            if (urlArr.length >= 2) {
                var href = urlArr.pop();

            
                var checkUrl = layuimini.checkUrl(href);
                if (checkUrl != true) {
                    return layuimini.msg_error(checkUrl);
                }

    
                var checkTab = layuimini.checkTab(href);
                if (!checkTab) {
                    var title = href,
                        tabId = href;
                    $("[data-tab]").each(function () {
                        var checkHref = $(this).attr("data-tab");

                    
                        if (layuimini.config('urlSuffixDefault')) {
                            if (href.indexOf("mpi=") > -1) {
                                var menuParameId = $(this).attr('data-tab-mpi');
                                if (checkHref.indexOf("?") > -1) {
                                    checkHref = checkHref + '&mpi=' + menuParameId;
                                } else {
                                    checkHref = checkHref + '?mpi=' + menuParameId;
                                }
                            }
                        }

                        if (checkHref == tabId) {
                            title = $(this).html();
                            title = title.replace('style="display: none;"', '');

                         
                            var addMenuClass = function ($element, type) {
                                if (type == 1) {
                                    $element.addClass('layui-this');
                                    if ($element.attr('class') != 'layui-nav-item layui-this') {
                                        addMenuClass($element.parent().parent(), 2);
                                    } else {
                                        var moduleId = $element.parent().attr('id');
                                        $(".layui-header-menu li").attr('class', 'layui-nav-item');
                                        $("#" + moduleId + "HeaderId").addClass("layui-this");
                                        $(".layui-left-nav-tree").attr('class', 'layui-nav layui-nav-tree layui-hide');
                                        $("#" + moduleId).attr('class', 'layui-nav layui-nav-tree layui-this');
                                    }
                                } else {
                                    $element.addClass('layui-nav-itemed');
                                    if ($element.attr('class') != 'layui-nav-item layui-nav-itemed') {
                                        addMenuClass($element.parent().parent(), 2);
                                    } else {
                                        var moduleId = $element.parent().attr('id');
                                        $(".layui-header-menu li").attr('class', 'layui-nav-item');
                                        $("#" + moduleId + "HeaderId").addClass("layui-this");
                                        $(".layui-left-nav-tree").attr('class', 'layui-nav layui-nav-tree layui-hide');
                                        $("#" + moduleId).attr('class', 'layui-nav layui-nav-tree layui-this');
                                    }
                                }
                            };
                            addMenuClass($(this).parent(), 1);
                        }
                    });
                    var layuiminiHomeTab = $('#layuiminiHomeTab').attr('lay-id'),
                        layuiminiHomeHref = sessionStorage.getItem('layuiminiHomeHref');

                 
                    if (href == title) {
                        var layuiminiTabInfo = JSON.parse(sessionStorage.getItem("layuiminiTabInfo"));
                        if (layuiminiTabInfo != null) {
                            var check = layuiminiTabInfo[tabId];
                            if (check != undefined || check != null) {
                                title = check['title'];
                            }
                        }
                    }

                    if (layuiminiHomeTab != href && layuiminiHomeHref != href) {
                        layuimini.addTab(tabId, href, title, true);
                        layuimini.changeTab(tabId);
                    }
                }
            }
            if (layuimini.config('urlHashLocation')) {
                layuimini.hashTab();
            }
        };

        /**
         *
         * @param bgcolorId
         */
        this.bgColorConfig = function (bgcolorId) {
            var bgColorConfig = [
                {
                    headerRight: '#1aa094',
                    headerRightThis: '#197971',
                    headerLogo: '#243346',
                    menuLeft: '#2f4056',
                    menuLeftThis: '#1aa094',
                    menuLeftHover: '#3b3f4b',
                },
                {
                    headerRight: '#23262e',
                    headerRightThis: '#0c0c0c',
                    headerLogo: '#0c0c0c',
                    menuLeft: '#23262e',
                    menuLeftThis: '#1aa094',
                    menuLeftHover: '#3b3f4b',
                },
                {
                    headerRight: '#ffa4d1',
                    headerRightThis: '#bf7b9d',
                    headerLogo: '#e694bd',
                    menuLeft: '#1f1f1f',
                    menuLeftThis: '#ffa4d1',
                    menuLeftHover: '#1f1f1f',
                },
                {
                    headerRight: '#1aa094',
                    headerRightThis: '#197971',
                    headerLogo: '#0c0c0c',
                    menuLeft: '#23262e',
                    menuLeftThis: '#1aa094',
                    menuLeftHover: '#3b3f4b',
                },
                {
                    headerRight: '#1e9fff',
                    headerRightThis: '#0069b7',
                    headerLogo: '#0c0c0c',
                    menuLeft: '#1f1f1f',
                    menuLeftThis: '#1aa094',
                    menuLeftHover: '#3b3f4b',
                },

                {
                    headerRight: '#ffb800',
                    headerRightThis: '#d09600',
                    headerLogo: '#243346',
                    menuLeft: '#2f4056',
                    menuLeftThis: '#1aa094',
                    menuLeftHover: '#3b3f4b',
                },
                {
                    headerRight: '#e82121',
                    headerRightThis: '#ae1919',
                    headerLogo: '#0c0c0c',
                    menuLeft: '#1f1f1f',
                    menuLeftThis: '#1aa094',
                    menuLeftHover: '#3b3f4b',
                },
                {
                    headerRight: '#963885',
                    headerRightThis: '#772c6a',
                    headerLogo: '#243346',
                    menuLeft: '#2f4056',
                    menuLeftThis: '#1aa094',
                    menuLeftHover: '#3b3f4b',
                },
                {
                    headerRight: '#1e9fff',
                    headerRightThis: '#0069b7',
                    headerLogo: '#0069b7',
                    menuLeft: '#1f1f1f',
                    menuLeftThis: '#1aa094',
                    menuLeftHover: '#3b3f4b',
                },
                {
                    headerRight: '#ffb800',
                    headerRightThis: '#d09600',
                    headerLogo: '#d09600',
                    menuLeft: '#2f4056',
                    menuLeftThis: '#1aa094',
                    menuLeftHover: '#3b3f4b',
                },
                {
                    headerRight: '#e82121',
                    headerRightThis: '#ae1919',
                    headerLogo: '#d91f1f',
                    menuLeft: '#1f1f1f',
                    menuLeftThis: '#1aa094',
                    menuLeftHover: '#3b3f4b',
                },
                {
                    headerRight: '#963885',
                    headerRightThis: '#772c6a',
                    headerLogo: '#772c6a',
                    menuLeft: '#2f4056',
                    menuLeftThis: '#1aa094',
                    menuLeftHover: '#3b3f4b',
                }
            ];

            if (bgcolorId == undefined) {
                return bgColorConfig;
            } else {
                return bgColorConfig[bgcolorId];
            }
        };

        /**
         * 
         * @returns {string}
         */
        this.buildBgColorHtml = function () {
            var html = '';
            var bgcolorId = sessionStorage.getItem('layuiminiBgcolorId');
            if (bgcolorId == null || bgcolorId == undefined || bgcolorId == '') {
                bgcolorId = 0;
            }
            var bgColorConfig = layuimini.bgColorConfig();
            $.each(bgColorConfig, function (key, val) {
                if (key == bgcolorId) {
                    html += '<li class="layui-this" data-select-bgcolor="' + key + '">\n';
                } else {
                    html += '<li  data-select-bgcolor="' + key + '">\n';
                }
                html += '<a href="javascript:;" data-skin="skin-blue" style="" class="clearfix full-opacity-hover">\n' +
                    '<div><span style="display:block; width: 20%; float: left; height: 12px; background: ' + val.headerLogo + ';"></span><span style="display:block; width: 80%; float: left; height: 12px; background: ' + val.headerRight + ';"></span></div>\n' +
                    '<div><span style="display:block; width: 20%; float: left; height: 40px; background: ' + val.menuLeft + ';"></span><span style="display:block; width: 80%; float: left; height: 40px; background: #f4f5f7;"></span></div>\n' +
                    '</a>\n' +
                    '</li>';
            });
            return html;
        };

        /**
         * 
         * @param tabId
         **/
        this.checkTab = function (tabId, isIframe) {
         
            var checkTab = false;
            if (isIframe == undefined || isIframe == false) {
                $(".layui-tab-title li").each(function () {
                    checkTabId = $(this).attr('lay-id');
                    if (checkTabId != null && checkTabId == tabId) {
                        checkTab = true;
                    }
                });
            } else {
                parent.layui.$(".layui-tab-title li").each(function () {
                    checkTabId = $(this).attr('lay-id');
                    if (checkTabId != null && checkTabId == tabId) {
                        checkTab = true;
                    }
                });
            }
            if (checkTab == false) {
                return false;
            }

            // 
            var layuiminiTabInfo = JSON.parse(sessionStorage.getItem("layuiminiTabInfo"));
            if (layuiminiTabInfo == null) {
                layuiminiTabInfo = {};
            }
            var check = layuiminiTabInfo[tabId];
            if (check == undefined || check == null) {
                return false;
            }
            return true;
        };

        /**
         * 
         * @param tabId
         * @param href
         * @param title
         */
        this.addTab = function (tabId, href, title, addSession) {
            if (addSession == undefined || addSession == true) {
                var layuiminiTabInfo = JSON.parse(sessionStorage.getItem("layuiminiTabInfo"));
                if (layuiminiTabInfo == null) {
                    layuiminiTabInfo = {};
                }
                layuiminiTabInfo[tabId] = {href: href, title: title}
                sessionStorage.setItem("layuiminiTabInfo", JSON.stringify(layuiminiTabInfo));
            }
            element.tabAdd('layuiminiTab', {
                title: title + '<i data-tab-close="" class="layui-icon layui-unselect layui-tab-close">ဆ</i>' 
                , content: '<iframe width="100%" height="100%" frameborder="0"  src="' + href + '"></iframe>'
                , id: tabId
            });
        };

        /**
         * 
         * @param tabId
         * @param isParent
         */
        this.delTab = function (tabId, isParent) {
            var layuiminiTabInfo = JSON.parse(sessionStorage.getItem("layuiminiTabInfo"));
            if (layuiminiTabInfo != null) {
                delete layuiminiTabInfo[tabId];
                sessionStorage.setItem("layuiminiTabInfo", JSON.stringify(layuiminiTabInfo))
            }
            if (isParent === true) {
                parent.layui.element.tabDelete('layuiminiTab', tabId);
            } else {
                element.tabDelete('layuiminiTab', tabId);
            }
        };

        /**
         * 
         */
        this.closeCurrentTab = function(){
            var ele = $("#top_tabs li.layui-this", parent.document);
            if (ele.length > 0) {
                var layId = $(ele[0]).attr('lay-id');
                layuimini.delTab(layId,true);
            }
        };

        /**
         * 
         **/
        this.changeTab = function (tabId) {
            element.tabChange('layuiminiTab', tabId);
        };

        /**
         * 
         */
        this.hashTab = function () {
            var layId = location.hash.replace(/^#/, '');
            element.tabChange('layuiminiTab', layId);
            element.on('tab(layuiminiTab)', function (elem) {
                location.hash = $(this).attr('lay-id');
            });
        };

        /**
         * 
         */
        this.checkMobile = function () {
            var ua = navigator.userAgent.toLocaleLowerCase();
            var pf = navigator.platform.toLocaleLowerCase();
            var isAndroid = (/android/i).test(ua) || ((/iPhone|iPod|iPad/i).test(ua) && (/linux/i).test(pf))
                || (/ucweb.*linux/i.test(ua));
            var isIOS = (/iPhone|iPod|iPad/i).test(ua) && !isAndroid;
            var isWinPhone = (/Windows Phone|ZuneWP7/i).test(ua);
            var clientWidth = document.documentElement.clientWidth;
            if (!isAndroid && !isIOS && !isWinPhone && clientWidth > 768) {
                return false;
            } else {
                return true;
            }
        };

        /**
         * 
         * @param url
         * @returns {boolean}
         */
        this.checkUrl = function (url) {
            if (!layuimini.config('checkUrlDefault')) {
                return true;
            }
            var msg = true;
            $.ajax({
                url: url,
                type: 'get',
                contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                async: false,
                error: function (xhr, textstatus, thrown) {
                    msg = 'Status:' + xhr.status + '，' + xhr.statusText + '后ほどお試しください!';
                }
            });
            return msg;
        };

        /**
         * 
         * @param title
         * @returns {*}
         */
        this.msg_success = function (title) {
            return layer.msg(title, {icon: 1, shade: this.shade, scrollbar: false, time: 2000, shadeClose: true});
        };

        /**
         * 
         * @param title
         * @returns {*}
         */
        this.msg_error = function (title) {
            return layer.msg(title, {icon: 2, shade: this.shade, scrollbar: false, time: 3000, shadeClose: true});
        };

        /**
         * 
         */
        this.tabRoll = function () {
            $(window).on("resize", function (event) {
                var topTabsBox = $("#top_tabs_box"),
                    topTabsBoxWidth = $("#top_tabs_box").width(),
                    topTabs = $("#top_tabs"),
                    topTabsWidth = $("#top_tabs").width(),
                    tabLi = topTabs.find("li.layui-this"),
                    top_tabs = document.getElementById("top_tabs"),
                    event = event || window.event;

                if (topTabsWidth > topTabsBoxWidth) {
                    if (tabLi.position().left > topTabsBoxWidth || tabLi.position().left + topTabsBoxWidth > topTabsWidth) {
                        topTabs.css("left", topTabsBoxWidth - topTabsWidth);
                    } else {
                        topTabs.css("left", -tabLi.position().left);
                    }
                 
                    var flag = false;
                    var cur = {
                        x: 0,
                        y: 0
                    }
                    var nx, dx, x;

                    function down(event) {
                        flag = true;
                        var touch;
                        if (event.touches) {
                            touch = event.touches[0];
                        } else {
                            touch = event;
                        }
                        cur.x = touch.clientX;
                        dx = top_tabs.offsetLeft;
                    }

                    function move(event) {
                        var self = this;
                        if (flag) {
                            window.getSelection ? window.getSelection().removeAllRanges() : document.selection.empty();
                            var touch;
                            if (event.touches) {
                                touch = event.touches[0];
                            } else {
                                touch = event;
                            }
                            nx = touch.clientX - cur.x;
                            x = dx + nx;
                            if (x > 0) {
                                x = 0;
                            } else {
                                if (x < topTabsBoxWidth - topTabsWidth) {
                                    x = topTabsBoxWidth - topTabsWidth;
                                } else {
                                    x = dx + nx;
                                }
                            }
                            top_tabs.style.left = x + "px";
                  
                            document.addEventListener("touchmove", function () {
                                event.preventDefault();
                            }, false);
                        }
                    }

            
                    function end() {
                        flag = false;
                    }

             
                    topTabs.on("mousedown", down);
                    topTabs.on("mousemove", move);
                    $(document).on("mouseup", end);
           
                    topTabs.on("touchstart", down);
                    topTabs.on("touchmove", move);
                    topTabs.on("touchend", end);
                } else {
             
                    topTabs.off("mousedown", down);
                    topTabs.off("mousemove", move);
                    topTabs.off("mouseup", end);
              
                    topTabs.off("touchstart", down);
                    topTabs.off("touchmove", move);
                    topTabs.off("touchend", end);
                    topTabs.removeAttr("style");
                    return false;
                }
            }).resize();
        };


    };

    /**
     * 
     **/
    $('body').on('click', '[data-tab-close]', function () {
        var loading = layer.load(0, {shade: false, time: 2 * 1000});
        $parent = $(this).parent();
        tabId = $parent.attr('lay-id');
        if (tabId != undefined || tabId != null) {
            layuimini.delTab(tabId);
        }
        layuimini.tabRoll();
        layer.close(loading);
    });

    /**
     * 
     */
    $('body').on('click', '[data-tab]', function () {
        var loading = layer.load(0, {shade: false, time: 2 * 1000});
        var tabId = $(this).attr('data-tab'),
            href = $(this).attr('data-tab'),
            title = $(this).html(),
            target = $(this).attr('target');
        if (target == '_blank') {
            layer.close(loading);
            window.open(href, "_blank");
            return false;
        }
        title = title.replace('style="display: none;"', '');

      
        if (layuimini.config('urlSuffixDefault')) {
            var menuParameId = $(this).attr('data-tab-mpi');
            if (href.indexOf("?") > -1) {
                href = href + '&mpi=' + menuParameId;
                tabId = href;
            } else {
                href = href + '?mpi=' + menuParameId;
                tabId = href;
            }
        }

        var checkUrl = layuimini.checkUrl(href);
        if (checkUrl != true) {
            return layuimini.msg_error(checkUrl);
        }

        if (tabId == null || tabId == undefined) {
            tabId = new Date().getTime();
        }

        var checkTab = layuimini.checkTab(tabId);
        if (!checkTab) {
            layuimini.addTab(tabId, href, title, true);
        }
        element.tabChange('layuiminiTab', tabId);
        layuimini.initDevice();
        layuimini.tabRoll();
        layer.close(loading);
    });

    /**
     * 
     */
    $('body').on('click', '[data-iframe-tab]', function () {
        var loading = parent.layer.load(0, {shade: false, time: 2 * 1000});
        var tabId = $(this).attr('data-iframe-tab'),
            href = $(this).attr('data-iframe-tab'),
            icon = $(this).attr('data-icon'),
            title = $(this).attr('data-title'),
            target = $(this).attr('target');
        if (target == '_blank') {
            parent.layer.close(loading);
            window.open(href, "_blank");
            return false;
        }
        title = '<i class="' + icon + '"></i><span class="layui-left-nav"> ' + title + '</span>';
        if (tabId == null || tabId == undefined) {
            tabId = new Date().getTime();
        }
        // 
        var checkTab = layuimini.checkTab(tabId, true);
        if (!checkTab) {
            var layuiminiTabInfo = JSON.parse(sessionStorage.getItem("layuiminiTabInfo"));
            if (layuiminiTabInfo == null) {
                layuiminiTabInfo = {};
            }
            layuiminiTabInfo[tabId] = {href: href, title: title}
            sessionStorage.setItem("layuiminiTabInfo", JSON.stringify(layuiminiTabInfo));
            parent.layui.element.tabAdd('layuiminiTab', {
                title: title + '<i data-tab-close="" class="layui-icon layui-unselect layui-tab-close">ဆ</i>' 
                , content: '<iframe width="100%" height="100%" frameborder="0"  src="' + href + '"></iframe>'
                , id: tabId
            });
        }
        parent.layui.element.tabChange('layuiminiTab', tabId);
        layuimini.tabRoll();
        parent.layer.close(loading);
    });

    /**
     * 
     */
    $('body').on('click', '[data-menu]', function () {
        var loading = layer.load(0, {shade: false, time: 2 * 1000});
        $parent = $(this).parent();
        menuId = $(this).attr('data-menu');
        // header
        $(".layui-header-menu .layui-nav-item.layui-this").removeClass('layui-this');
        $(this).addClass('layui-this');
        // left
        $(".layui-left-menu .layui-nav.layui-nav-tree.layui-this").addClass('layui-hide');
        $(".layui-left-menu .layui-nav.layui-nav-tree.layui-this.layui-hide").removeClass('layui-this');
        $("#" + menuId).removeClass('layui-hide');
        $("#" + menuId).addClass('layui-this');
        layer.close(loading);
    });

    /**
     * 
     */
    $('body').on('click', '[data-clear]', function () {
        var loading = layer.load(0, {shade: false, time: 2 * 1000});
        sessionStorage.clear();

   
        var clearUrl = $(this).attr('data-href');
        if (clearUrl != undefined && clearUrl != '' && clearUrl != null) {
            $.getJSON(clearUrl, function (data, status) {
                layer.close(loading);
                if (data.code != 1) {
                    return layuimini.msg_error(data.msg);
                } else {
                    return layuimini.msg_success(data.msg);
                }
            }).fail(function () {
                layer.close(loading);
                return layuimini.msg_error('バッグアウトのインターフェースが間違っている');
            });
        } else {
            layer.close(loading);
            return layuimini.msg_success('キャッシュ消去成功');
        }
    });

    /**
     * 
     */
    $('body').on('click', '[data-refresh]', function () {
        $(".layui-tab-item.layui-show").find("iframe")[0].contentWindow.location.reload();
        layuimini.msg_success('リフレッシュに成功する');
    });

    /**
     * 
     */
    $('body').on('click', '[data-page-close]', function () {
        var loading = layer.load(0, {shade: false, time: 2 * 1000});
        var closeType = $(this).attr('data-page-close');
        $(".layui-tab-title li").each(function () {
            tabId = $(this).attr('lay-id');
            var id = $(this).attr('id');
            if (id != 'layuiminiHomeTabId') {
                var tabClass = $(this).attr('class');
                if (closeType == 'all') {
                    layuimini.delTab(tabId);
                } else {
                    if (tabClass != 'layui-this') {
                        layuimini.delTab(tabId);
                    }
                }
            }
        });
        layuimini.tabRoll();
        layer.close(loading);
    });

    /**
     * 
     */
    $('body').on('click', '[data-side-fold]', function () {
        var loading = layer.load(0, {shade: false, time: 2 * 1000});
        var isShow = $(this).attr('data-side-fold');
        if (isShow == 1) { 
            $(this).attr('data-side-fold', 0);
            $('.layuimini-tool i').attr('class', 'fa fa-indent');
            $('.layui-layout-body').attr('class', 'layui-layout-body layuimini-mini');
        } else { 
            $(this).attr('data-side-fold', 1);
            $('.layuimini-tool i').attr('class', 'fa fa-outdent');
            $('.layui-layout-body').attr('class', 'layui-layout-body layuimini-all');
        }
        layuimini.tabRoll();
        element.init();
        layer.close(loading);
    });

    /**
     * 
     */
    $("body").on("mouseenter", ".layui-menu-tips", function () {
        var classInfo = $(this).attr('class'),
            tips = $(this).children('span').text(),
            isShow = $('.layuimini-tool i').attr('data-side-fold');
        if (isShow == 0) {
            openTips = layer.tips(tips, $(this), {tips: [2, '#2f4056'], time: 30000});
        }
    });
    $("body").on("mouseleave", ".layui-menu-tips", function () {
        var isShow = $('.layuimini-tool i').attr('data-side-fold');
        if (isShow == 0) {
            try {
                layer.close(openTips);
            } catch (e) {
                console.log(e.message);
            }
        }
    });

    /**
     * 
     */
    $('body').on('click', '[data-bgcolor]', function () {
        var loading = layer.load(0, {shade: false, time: 2 * 1000});
        var clientHeight = (document.documentElement.clientHeight) - 95;
        var bgColorHtml = layuimini.buildBgColorHtml();
        var html = '<div class="layuimini-color">\n' +
            '<div class="color-title">\n' +
            '<span>The color scheme</span>\n' +
            '</div>\n' +
            '<div class="color-content">\n' +
            '<ul>\n' + bgColorHtml + '</ul>\n' +
            '</div>\n' +
            '</div>';
        layer.open({
            type: 1,
            title: false,
            closeBtn: 0,
            shade: 0.2,
            anim: 2,
            shadeClose: true,
            id: 'layuiminiBgColor',
            area: ['340px', clientHeight + 'px'],
            offset: 'rb',
            content: html,
            end:function () {
                $('.layuimini-select-bgcolor').removeClass('layui-this');
            }
        });
        layer.close(loading);
    });

    /**
     * 
     */
    $('body').on('click', '[data-select-bgcolor]', function () {
        var bgcolorId = $(this).attr('data-select-bgcolor');
        $('.layuimini-color .color-content ul .layui-this').attr('class', '');
        $(this).attr('class', 'layui-this');
        sessionStorage.setItem('layuiminiBgcolorId', bgcolorId);
        layuimini.initBgColor();
    });

    exports("layuimini", layuimini);
});
