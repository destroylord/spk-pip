
@push('styles')
    <style>
      /* Zangdar package css */
      .zangdar__wizard {
        display: block;
        height: 100%;
        position: relative;
      }
      .zangdar__wizard .zangdar__step { display: none; }
      .zangdar__wizard .zangdar__step.zangdar__step__active { display: block; }

      /* Other css */

      .parallax {
        /* The image used */
        background-image: url('https://cdn-sekolah.annibuku.com/20521628/4.jpg');

        /* Full height */
        height: 100%; 

        /* Create the parallax scrolling effect */
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
      }

      /* Turn off parallax scrolling for tablets and phones. Increase the pixels if needed */
      @media only screen and (max-device-width: 1366px) {
        .parallax {
          background-attachment: scroll;
        }
      }
    </style>
@endpush

@push('scripts')
    <script src="front/assets/js/zangdar.min.js"></script>
    <script>
      
      function buildStepsBreadcrumb (wizard, element, steps) {
        const $steps = document.getElementById(element)
        $steps.innerHTML = ''
        for (let label in steps) {
          
          if (steps.hasOwnProperty(label)) {
            const $li = document.createElement('li')
            const $a = document.createElement('a')
            $li.classList.add('nav-item')
            $a.classList.add('nav-link')
            if (steps[label].active) {
              $a.classList.add('active')
            }
            $a.setAttribute('href', '#')
            $a.innerText = label
            $a.addEventListener('click', e => {
              e.preventDefault()
              wizard.revealStep(label)
            })
            $li.appendChild($a)
            $steps.appendChild($li)
          }
        }
      }

      function onStepChange(wizard, selector) {
          const steps = wizard.getBreadcrumb()
          
          buildStepsBreadcrumb(wizard, selector, steps)
      }

      const wizard = new window.Zangdar('#my-wizard', {
        onStepChange: () => {
          onStepChange(wizard, 'steps-native')
        },
        onSubmit(e) {
          e.preventDefault()

          const formData = new FormData(e.target);

          $.ajax({
              url: '/form-pendaftaran-siswa-store',
              method: 'POST',
              data: formData,
              headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
              processData: false,
              contentType: false,
              success: function(response) {
                  console.log('Data berhasil disimpan:', response);
              },
              error: function(error) {
                  console.error('Error:', error);
              }
          });


          // console.log(e.target.elements)
          return false
        }
      })

      onStepChange(wizard, 'steps-native')
    </script>
@endpush