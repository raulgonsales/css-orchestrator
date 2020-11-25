$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
        $('#content').toggleClass('active');
    });

    $('#select_project').selectpicker({
        size: 10,
        showTick: true,
        liveSearch: true
    }).on('shown.bs.select', function () {
        $(this).siblings().find('.bs-searchbox input').focus();
    });
});
