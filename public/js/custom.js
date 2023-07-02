$(document).ready(function() {
    var defaultItemId = "";
    var defaultItemName = "";
    var defaultButtonText = "Adicionar " + defaultItemName;
    $('#button').attr('data-target', '#' + defaultItemId);
    $('#button').text(defaultButtonText);
});

$('#myList a').on('click', function (e) {
e.preventDefault();

    var targetId = $(this).attr('href');
    var targetName = $(this).text();
    var targetButtonText = "Adicionar " + targetName;

    $('#button').attr('data-target', targetId); // Atualiza o ID do botão com o ID do item clicado
    $('#button').text(targetButtonText); // Atualiza o nome do botão com o nome do item clicado
    $('.collapse').collapse('hide'); // Esconde todos os conteúdos
    $(targetId).collapse('show'); // Exibe o conteúdo do item clicado
});

function mostrarOcultarConteudo(checkbox) {
    var conteudoDiv = document.getElementById('conteudo');

    if (checkbox.checked) {
      conteudoDiv.style.display = 'block';
    } else {
      conteudoDiv.style.display = 'none';
    }
}
