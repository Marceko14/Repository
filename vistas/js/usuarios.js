//subiendo foto de perfil
$(".nuevaFoto").change(function(){

    var image = this.file[0];
    //validar la imagen en formato jpg o png
    if (image["type"] != "image/jpeg" && image["type"] !="image/png") {
        $(".nuevaFoto").val("");
        swal({
            title: "error al subir imagen",
            text: "!La imagen debe estar en formato JPG o PNG",
            type: "Error",
            confirmButttonText: "Cerrar"
        })

    } else if(image["size"]> 2000000) {
        $(".nuevaFoto").val("");
        swal({
            text: "!La imagen debe estar en formato JPG o PNG",
            type: "Error",
            confirmButttonText: "Cerrar"

        })
        

    }
    else{
        var DatosImage = new FileReader;
        DatosImage.readAsDataURL(image);
        $(DatosImage).on("load",function(event){
            var rutaImagen = event.target.result;
            $(".previsualizar").attr("src",rutaImagen);

        })
    }
        
})