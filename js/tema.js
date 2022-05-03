$(document).ready(function() {

    $('.botao-lua').click(function(e) {
        e.preventDefault()

        $('.jumbotron').removeClass('gradient-sol')
        $('.container-fluid').removeClass('bg-danger')

        $('.jumbotron').addClass('gradient-lua')
        $('.container-fluid').addClass('bg-footer-lua')
    })

    $('.botao-sol').click(function(e) {
        e.preventDefault()


        $('.jumbotron').removeClass('gradient-lua')
        $('.container-fluid').remove('bg-footer-lua')

        $('.jumbotron').addClass('gradient-sol')
        $('.container-fluid').addClass('bg-danger')
    })


})