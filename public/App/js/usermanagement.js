if (window.Vue) {
    new Vue({
        el: "#usermanagement",
        data: {
           isLoading: false,
          
           user:{
            id: "",
             name: "",
             email: "",
             mobile: "",
             password: "",
             confirm_password: "",
             role: "",
           },

           updateUser:{
            id: "",
            name: "",
            email: "",
            mobile: "",
            password: "",
            confirm_password: "",
            role: "",
          },

          filter: "",


           url: {
               create: "",
               update: "",
               delete: "",
               secret: ""
           },

           users: []
        },


       


        mounted() {
          this.users = JSON.parse($("#users").val());
          this.url.create = $("#createUser").val();
          this.url.update = $("#update").val();
          this.url.delete = $("#userdelete").val();
          this.url.secret = $("#changeSecret").val();

        },

        computed: {
            getUsers() {
                let result = this.users.filter((user) => {
                    let status = (user.name.toLowerCase().includes(this.filter.toLowerCase()) ||
                        user.email.toLowerCase().includes(this.filter.toLowerCase()));
                        return status
                });
                return result;
            },
        },

        methods: {

            changeUserSecret(){
                this.isLoading = true;
                axios.post(this.url.secret,{
                    id:this.updateUser.id,
                    email: this.updateUser.password,
                    confirm_password: this.updateUser.confirm_password,
                   _token: $('input[name=_token]').val()
                }).then((response) => {
                    console.log('response..',response.data);
                    $('#changePassword').modal('hide');
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
                    this.isLoading = false;
                    let userPssword = response.data.user;
                    this.users = this.users.map((user) =>{
                        if(user.id === userPssword.id){
                            user = Object.assign({},userPssword)
                        }
                        return user;
                    })
                }).catch((error) => {
                    this.isLoading = false
                    this.$toastr.Add({
                        msg: error.response.data.message,
                        clickClose: false,
                        timeout: 2000,
                        position: "toast-top-right",
                        type: "error",
                        preventDuplicates: true,
                        progressbar: false,
                        style: { backgroundColor: "red" }
                    });
                });
            },

            addUser(){
              this.isLoading = true;
              let formData = new FormData();
                for(let key in this.user){
                    let value = this.user[key];
                    formData.append(key, value);
                }
                formData.append('_token', $('input[name=_token]').val());
                axios.post(this.url.create, formData)
                .then((response) => {
                  $('.addUser').modal('hide');
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
                          
                          this.users.push(Object.assign({}, response.data.user, {}));
                          this.user = {
                              name: '',
                              email: '',
                              mobile: ''
                          }
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



            updateUserDetails(){
              this.isLoading = true;
              axios.post(this.url.update,{
                  id:this.updateUser.id,
                  email: this.updateUser.email,
                  name: this.updateUser.name,
                  mobile: this.updateUser.mobile,
                  role: this.updateUser.role,
                  _token: $('input[name=_token]').val()
              }).then((response) => {
                  console.log('response..',response.data);
                  $('#editContact').modal('hide');
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
                  this.isLoading = false;
                  let userEdit = response.data.user;
                  this.users = this.users.map((user) =>{
                      if(user.id === userEdit.id){
                          user = Object.assign({},userEdit)
                      }
                      return user;
                  })
              }).catch((error) => {
                  this.isLoading = false
                  this.$toastr.Add({
                      msg: error.response.data.message,
                      clickClose: false,
                      timeout: 2000,
                      position: "toast-top-right",
                      type: "error",
                      preventDuplicates: true,
                      progressbar: false,
                      style: { backgroundColor: "red" }
                  });
              });
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