function readURL(input) {
    if (input.files && input.files[0]) {

      var reader = new FileReader();

      reader.onload = function(e) {
        $('.image-upload-wrap').hide();

        $('.file-upload-image').attr('src', e.target.result);
        $('.file-upload-content').show();

        $('.image-title').html(input.files[0].name);
      };

      reader.readAsDataURL(input.files[0]);

    } else {
      removeUpload();
    }
  }

  function removeUpload() {
    $('.file-upload-input').replaceWith($('.file-upload-input').clone());
    $('.file-upload-content').hide();
    $('.image-upload-wrap').show();
  }
  $('.image-upload-wrap').bind('dragover', function () {
          $('.image-upload-wrap').addClass('image-dropping');
      });
      $('.image-upload-wrap').bind('dragleave', function () {
          $('.image-upload-wrap').removeClass('image-dropping');
  });


  function readURLS(input) {
    if (input.files && input.files[0]) {

      var reader = new FileReader();

      reader.onload = function(e) {
        $('.image-upload-wraps').hide();

        $('.file-upload-images').attr('src', e.target.result);
        $('.file-upload-contents').show();

        $('.image-title').html(input.files[0].name);
      };

      reader.readAsDataURL(input.files[0]);

    } else {
      removeUpload();
    }
  }


  function removeUploads() {
    $('.file-upload-inputs').replaceWith($('.file-upload-inputs').clone());
    $('.file-upload-contents').hide();
    $('.image-upload-wraps').show();
  }

  $('.image-upload-wraps').bind('dragover', function () {
  $('.image-upload-wraps').addClass('image-dropping');
  });
  $('.image-upload-wraps').bind('dragleave', function () {
    $('.image-upload-wraps').removeClass('image-dropping');
  });












/*
<style>
              body {
  font-family: sans-serif;
  background-color: #eeeeee;
}

.file-upload {
  background-color: #ffffff;
  width: 600px;
  margin: 0 auto;
  padding: 20px;
}

.file-upload-btn {
  width: 100%;
  margin: 0;
  color: #fff;
  background: #1FB264;
  border: none;
  padding: 10px;
  border-radius: 4px;
  border-bottom: 4px solid #15824B;
  transition: all .2s ease;
  outline: none;
  text-transform: uppercase;
  font-weight: 700;
}

.file-upload-btn:hover {
  background: #1AA059;
  color: #ffffff;
  transition: all .2s ease;
  cursor: pointer;
}

.file-upload-btn:active {
  border: 0;
  transition: all .2s ease;
}

.file-upload-content {
  display: none;
  text-align: center;
}

.file-upload-input {
  position: absolute;
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
  outline: none;
  opacity: 0;
  cursor: pointer;
}

.image-upload-wrap {
  margin-top: 20px;
  border: 4px dashed #1FB264;
  position: relative;
}

.image-dropping,
.image-upload-wrap:hover {
  background-color: #1FB264;
  border: 4px dashed #ffffff;
}

.image-title-wrap {
  padding: 0 15px 15px 15px;
  color: #222;
}

.drag-text {
  text-align: center;
}

.drag-text h3 {
  font-weight: 100;
  text-transform: uppercase;
  color: #15824B;
  padding: 60px 0;
}

.file-upload-image {
  max-height: 200px;
  max-width: 200px;
  margin: auto;
  padding: 20px;
}

.remove-image {
  width: 200px;
  margin: 0;
  color: #fff;
  background: #cd4535;
  border: none;
  padding: 10px;
  border-radius: 4px;
  border-bottom: 4px solid #b02818;
  transition: all .2s ease;
  outline: none;
  text-transform: uppercase;
  font-weight: 700;
}

.remove-image:hover {
  background: #c13b2a;
  color: #ffffff;
  transition: all .2s ease;
  cursor: pointer;
}

.remove-image:active {
  border: 0;
  transition: all .2s ease;
}
</style>
*/






/* <div class="file-upload col-6">
                <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Ajout Photo</button>
                <div class="image-upload-wrap">
                  <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" name="images"/>
                  <div class="drag-text">
                    <h3>Faites glisser et déposez un fichier ou sélectionnez ajouter une image</h3>
                  </div>
                </div>
                <div class="file-upload-content">
                  <img class="file-upload-image" src="#" alt="your image" />
                  <div class="image-title-wrap">
                    <button type="button" onclick="removeUpload()" class="remove-image">Suprimer <span class="image-title">Uploaded Image</span></button>
                  </div>
                </div>
              </div>
              <div class="file-upload col-6">
                  <button class="file-upload-btn" type="button" onclick="$('.file-upload-inputs').trigger( 'click' )">Ajout Photo Signature</button>
                  <div class="image-upload-wraps">
                    <input class="file-upload-inputs" type='file' onchange="readURLS(this);" accept="image/*" name="image_signature"/>
                    <div class="drag-text">
                      <h3>Faites glisser et déposez un fichier ou sélectionnez ajouter une image</h3>
                    </div>
                  </div>
                  <div class="file-upload-contents">
                    <img class="file-upload-images" src="#" alt="your image" />
                    <div class="image-title-wrap">
                      <button type="button" onclick="removeUploads()" class="remove-image">Suprimer <span class="image-title">Uploaded Image</span></button>
                    </div>
                  </div>
                </div> */
