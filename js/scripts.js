// Carousel Auto-Cycle
  $(document).ready(function() {
    $('.masthead').visibility({
        once: false,
        onBottomPassed: function() {
          $('.fixed.menu').transition('fade in');
        },
        onBottomPassedReverse: function() {
          $('.fixed.menu').transition('fade out');
        }
    });
    // create sidebar and attach to menu open
    $('.ui.sidebar').sidebar('attach events', '.toc.item');
    //Carousel
    $('.carousel').carousel({
       interval: 5000
     });

    //Tabs
    $('.menu .item').tab();

    //Menus desplegables
    $('.ui.accordion').accordion();
     var $demo = $('.ui.shape'),$directionButton = $('.direction .button'),handler;
 // event handlers
    handler = {
        rotate: function() {
            var
            $shape    = $(this).closest('.buttons').prevAll('.ui.shape').eq(0),
            direction = $(this).data('direction') || false,
            animation = $(this).data('animation') || false;
            if(direction && animation) {
                $shape
                .shape(animation + '.' + direction);
            }
        }
    };

    //Carrouseles giratorios
    $demo.shape();
    $directionButton.on('click', handler.rotate).popup({
        position  : 'bottom center'
    });
    //facebook plugin
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    //registro
      $('.ui.form')
  .form({
    fields: {
      name: {
        identifier: 'name',
        rules: [
          {
            type   : 'empty',
            prompt : 'Ingresa tu nombre'
          }
        ]
      },
     name1: {
        identifier: 'lugar',
        rules: [
          {
            type   : 'empty',
            prompt : 'Ingresa el nombre del lugar'
          }
        ]
      },
      categoria: {
        identifier: 'categoria',
        rules: [
          {
            type   : 'empty',
            prompt : 'Selecciona una categoria'
          }
        ]
      },
      password: {
        identifier: 'password',
        rules: [
          {
            type   : 'empty',
            prompt : 'Ingresa tu contraseña'
          },
          {
            type   : 'minLength[6]',
            prompt : 'Tu contraseña debe ser minimo de {ruleValue} caracteres'
          }
        ]
      },
     pssword: {
        identifier: 'pssword',
        rules: [
          {
            type   : 'match[password]',
            prompt : 'Las contraseñas no coinciden'
          },
          {
            type   : 'empty',
            prompt : 'Repite tu contraseña'
          }
        ]
      },
      ubicacion: {
        identifier: 'ubicacion',
        rules: [
          {
            type   : 'empty',
            prompt : 'Ingresa la direccion'
          },
          {
            type   : 'minLength[10]',
            prompt : 'Direccion no valida, pon la direccion completa'
          }
        ]
      },
      email: {
        identifier  : 'correo',
        rules: [
          {
            type   : 'email',
            prompt : 'Ingrese una cuenta de correo electronico'
          }
        ]
      },
    horario: {
        identifier: 'horaapertura',
        rules: [
          {
            type   : 'empty',
            prompt : 'Selecciona una hora de apertura'
          }
        ]
      },
    horario1: {
        identifier: 'horacierre',
        rules: [
          {
            type   : 'empty',
            prompt : 'Selecciona una hora de cierre'
          }
        ]
      },
    foto: {
        identifier: 'foto',
        rules: [
          {
            type   : 'empty',
            prompt : 'Selecciona una foto del lugar'
          }
        ]
      }  
      
    }
          
  });
      
      //ventanas modales
 $('.ui.modal')
  .modal()
;
  });

$('.ui.rating')
  .rating()
;