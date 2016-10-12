// app.js

new Vue({
  // We want to target the div with an id of 'pdf-transform'
  el: '#pdf-transform',

  // Here we can register any values or collections that hold data
  // for the application
  data: {
    pdf-file: ''
  },

  // Anything within the ready function will run when the application loads
  ready: function() {},

  // Methods we want to use in our application are registered here
  methods: {
    onFileChange(e) {
      var files = e.target.files || e.dataTransfer.files;
      if (!files.length)
        return;
      this.createImage(files[0]);
    },
    createImage(file) {
      var pdf-file = new Image();
      var reader = new FileReader();
      var vm = this;

      reader.onload = (e) => {
        vm.pdf-file = e.target.result;
      };
      reader.readAsDataURL(file);
    },
    removePdf: function (e) {
      this.pdf-file = '';
    }
  }
});
