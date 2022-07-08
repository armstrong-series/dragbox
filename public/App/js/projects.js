if (window.Vue) {
    new Vue({
        el: "#projects",
        data: {
           isLoading: false,
          
           user:{
            name: "",
            description: "",
            file: "",
            niche: ""
           },

           updateProject:{
            id: "",
            name: "",
            description: "",
            file: "",
            niche: "",
            originalFile: '',
            imageFile: null,
            input: null,
            isImageUploading: false,
          },

         


           url: {
               create: "",
               update: "",
               delete: "",
              
           },

           projects: []
        },


       


        mounted() {
          this.projects = JSON.parse($("#project").val());
          this.url.create = $("#createUser").val();
          this.url.update = $("#update").val();
          this.url.delete = $("#userdelete").val();
          this.url.secret = $("#changeSecret").val();

        },

       

        methods: {

           

            createProject(){
              this.isLoading = true;
              let formData = new FormData();
                for(let key in this.project){
                    let value = this.project[key];
                    formData.append(key, value);
                }
                formData.append('_token', $('input[name=_token]').val());
                formData.append('product_image', this.project.originalFile);
                axios.post(this.url.create, formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    },
                })
                .then((response) => {
                        this.$toastr.Add({
                            msg: response.data.message, 
                            clickClose: false, 
                            timeout: 2000,
                            position: "toast-top-right", 
                            type: "success", 
                            preventDuplicates: true, 
                            progressbar: false,
                            style: {backgroundColor: "#1BBCE8"}
                          });
                          this.isloading = false;
                          
                          this.projects.push(Object.assign({}, response.data.user, {}));
                          
                    }).catch((error) => {
                        console.log(error.response)
                        this.isLoading = false;
                        this.$toastr.Add({
                            msg: error.response.data.message, 
                            clickClose: false, 
                            timeout: 2000,
                            position: "toast-top-right", 
                            type: "error", 
                            preventDuplicates: true,
                            progressbar: false, 
                            style: {backgroundColor: "red"}
                          });
                    });


            },


            showImagePreview(event) {
                this.input = event.target;
                if (this.input.files && this.input.files[0]) {
                    this.project.originalFile = this.input.files[0]
                    let reader = new FileReader();
                    reader.onload = (e) => {
                        this.project.imageFile = e.target.result;
                        console.log(this.imageFile)
                    };
    
                    reader.readAsDataURL(this.input.files[0]);
                }
            },



           


        

            selectUser(index) {
                this.updateUser = Object.assign({}, this.users[index]);
            },


            deleteUser(index) {
				const user = Object.assign({}, this.users[index]);
				user._token = $('input[name=_token]').val()
				const customAlert = swal({
					title: 'Caution',
					text: `Are you sure you want to delete this User? This action cannot be undone.`,
					icon: 'warning',
					closeOnClickOutside: false,
					buttons: {
						cancel: {
							text: "cancel",
							visible: true,
							className: "",
							closeModal: true,
						},
						confirm: {
							text: "Continue",
							value: 'delete',
							visible: true,
							className: "btn-info",
						}
					}
				});

				customAlert.then(value => {
					if (value == 'delete') {
						this.isLoading = true;
						axios.post(this.url.delete, user)
							.then(response => {
								this.isLoading = false;
								this.users.splice(index, 1);
                                this.$toastr.Add({
                                    msg: response.data.message, 
                                    clickClose: false, 
                                    timeout: 2000,
                                    position: "toast-top-right", 
                                    type: "success", 
                                    preventDuplicates: true, 
                                    progressbar: false,
                                    style: {backgroundColor: "#1BBCE8"}
                                  });

							}).catch(error => {
								if (error.response) {
									this.isLoading = false;
                                    this.$toastr.Add({
                                        msg: error.response.data.message, 
                                        clickClose: false, 
                                        timeout: 3000,
                                        position: "toast-top-right", 
                                        type: "error", 
                                        preventDuplicates: true,
                                        progressbar: false, 
                                        style: { backgroundColor: "red"}
                                      });
								} else {
                                    this.$toastr.Add({
                                        msg: "oops! Unable to complete ", 
                                        clickClose: false, 
                                        timeout: 2000,
                                        position: "toast-top-right", 
                                        type: "error", 
                                        preventDuplicates: true,
                                        progressbar: false, 
                                        style: { backgroundColor: "red"}
                                      });
								}
							});

					}
				});
			},


          
            

            
       
          
         }
      
    });
}