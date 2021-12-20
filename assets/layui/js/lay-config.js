/**
 * date:2019/08/16
 * author:Mr.Chung
 * description:
 */

window.rootPath = (function (src) {
    src = document.scripts[document.scripts.length - 1].src;
    return src.substring(0, src.lastIndexOf("/") + 1);
})();

layui.config({
    base: rootPath + "lay-module/",
    version: true
}).extend({
    layuimini: "layuimini/layuimini", 
    step: 'step-lay/step', 
    treetable: 'treetable-lay/treetable', 
    tableSelect: 'tableSelect/tableSelect', 
    iconPickerFa: 'iconPicker/iconPickerFa', 
    echarts: 'echarts/echarts', 
    echartsTheme: 'echarts/echartsTheme', 
    wangEditor: 'wangEditor/wangEditor', 
});