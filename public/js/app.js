// app.js

new Vue({
    // We want to target the div with an id of 'pdf-transform'
    el: '#pdf-transform',

    // Here we can register any values or collections that hold data
    // for the application
    data: {
        pdffile: ''
    },

    // Anything within the ready function will run when the application loads
    ready: function() {},

    // Methods we want to use in our application are registered here
    methods: {
        onFileChange(e) {
            var files = e.target.files || e.dataTransfer.files;
            if (!files.length)
                return;
            this.createPdf(files[0]);
        },
        createPdf(file) {
            var pdffile = new FormData();
            var reader = new FileReader();
            var vm = this;

            reader.onload = (e) => {
                vm.pdffile = e.target.result;
                $('#viewer').attr('src', vm.pdffile);
            };
            reader.readAsDataURL(file);
        },
        onCreate: function(e) {
            e.preventDefault()
            $.ajax({
                context: this,
                type: "POST",
                data: {
                    pdffile: this.pdffile,
                },
                url: "/api/save",
                success: function(result) {
                }
            })
        },
    }
});
