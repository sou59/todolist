$(function() {
    /* Go DOM is loaded ! */

        // Requête AJAX Appeller  une page php qui genère à la volée un JSON
        $.getJSON("ajax/lists.php", function(data) {
            // sélection : là ou afficher le html
            // load : 1er argument : le template 
            // load : 2e argument : tableau associatif avec une clé, les éléments à traiter et les éléments data (ce qu'on récupère via le premier appel ajax quand on appel le script au-dessus)
            $("#list").load("tpl/lists.php", { items: data });

            console.log(data);
        
        });

         // Utilisation d'AJAX pour les formulaires
        $("form").on("submit", function(e) {
            e.preventDefault(); // Empêche la page de se recharger

            $title = $(this).find('#title').val();

            $.ajax({
                url: './tpl/checkform.php',
                type: 'POST',
                data: { 
                    'title': $title,
                },
                dataType: 'json',
    
                success: function(data) {
                    console.log(data)
                },
                error: function(){
                    alert('La requête ne peut aboutir');
                }
    
            });

        });

        // Evénément click sur les boutons de sélection d'une boisson
        $(document).on("click", ".fait", function() {
            // Si on click sur le bouton fait ajouter à la base UPDATE fait true

           // $id = $(this).find('#title').val();
            // $title = $(this).find('#title').val();
            // $fait = $(this).find('.fait').val();


            // $.ajax({
            //     url: './ajax/lists.php',
            //     type: 'POST',
            //     data: { 
            //         'id' : $id,
            //         'title': $title,
            //         'fait': $fait,
            //     },
            //     dataType: 'json',
    
            //     success: function(data) {
            //         console.log(data)
            //     },
            //     error: function(){
            //         alert('La requête ne peut aboutir');
            //     }

            // $.getJSON("ajax/update.php", function(data) {
            //     $("#list").load("tpl/lists.php", { items: data });
            //     console.log(data);
            // });
            // $('.fait').removeClass('fait').addClass('ok');
        });


});
