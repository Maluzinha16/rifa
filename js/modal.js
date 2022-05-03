//Leitura completa do nosso documento HTML
$(document).ready(function() {

    //Monitorar todos os cliques em cima do elemento "a" do nosso documento HTML

    $('img').click(function(e) {
        e.preventDefault()

        //Criar uma variavel local que receba o atributo href do link
        let page = $(this).attr('href')

        $('.modal-title').empty()
        $('.modal-body').empty()


        //Verificar qual conteudo eu devo carregar
        switch (page) {
            //Se for para abrir a pagina sobre mim...
            case 'adriano':
                $('.modal-title').append('O que ensinara?')
                $('.modal-body').append(`<ul>
                <li>HTML5 e CSS3</li>
                <li>Bootstrap</li>
                <li>Jquery</li>
              </ul>`)
                $('#modal-info').modal('show')
                break
            case 'diego':
                $('.modal-title').append('O que ensinara?')
                $('.modal-body').append(`<ul>
                <li>Modelagem Conceitual</li>
                <li>Conceitos de banco de dados</li>
                <li>Cardinalidade</li>
                <li>DML e DLL</li>
              </ul>`)
                $('#modal-info').modal('show')
                break
            case 'everaldo':
                $('.modal-title').append('O que ensinara?')
                $('.modal-body').append(`<ul>
                <li>PHP</li>
              </ul>`)
                $('#modal-info').modal('show')
                break
            case 'edson':
                $('.modal-title').append('O que ensinara?')
                $('.modal-body').append(`<ul>
                <li>App inventor</li>
                <li>PWA</li>
                <li>Android</li>
              </ul>`)
                $('#modal-info').modal('show')
                break
            default:
                alert('Link não encontrado')
        }

    })

})