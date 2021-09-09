
    function readImg(input) {

        var fileSelectEle = document.getElementById('foto');

        if (fileSelectEle.value.length == 0) {
            const labelfoto = document.querySelector('.custom-file-label');
            labelfoto.textContent = 'Pilih Gambar...';
            $('#hasil')
                .attr('src', '');
        } else {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                const labelfoto = document.querySelector('.custom-file-label');
                labelfoto.textContent = input.files[0].name;

                reader.onload = function(e) {
                    $('#hasil')
                        .attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

    }

    $(function() {
        $('#foto').on('change', function() {
            readURL(input);
        });
    });