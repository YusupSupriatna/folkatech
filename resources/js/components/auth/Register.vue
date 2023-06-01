<template>
    <div class="container">
        <div class="login_card">
            <div class="card_body">
                <h3 class="title" v-if="next===1">Daftar Sekarang</h3>
                <div class="back-button" v-else @click="page(1)">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.70711 1.70711C9.09763 1.31658 9.09763 0.683417 8.70711 0.292893C8.31658 -0.0976311 7.68342 -0.0976311 7.29289 0.292893L0.292893 7.29289C-0.0976311 7.68342 -0.0976311 8.31658 0.292893 8.70711L7.29289 15.7071C7.68342 16.0976 8.31658 16.0976 8.70711 15.7071C9.09763 15.3166 9.09763 14.6834 8.70711 14.2929L3.41421 9H15C15.5523 9 16 8.55229 16 8C16 7.44772 15.5523 7 15 7H3.41421L8.70711 1.70711Z" fill="#730C07"/>
                    </svg>
                    Kembali
                </div>
            </div>
            <div class="card_body">
                <form method="get" autocomplete="off">
                    <div v-if="next===1">
                        <div class="full-width">
                            <input autocomplete="off" type="text" v-model="firstname" placeholder="Nama Depan" />
                        </div>
                        <div class="full-width">
                            <input autocomplete="off" type="text" v-model="lastname" placeholder="Nama Belakang" />
                        </div>
                        <div class="full-width">
                            <input autocomplete="off" type="text" v-model="email" placeholder="Email" />
                        </div>
                    </div>
                    <div v-else>
                        <div class="full-width">
                            <input autocomplete="off" type="text" v-model="phone" placeholder="Nomor Telepon" />
                        </div>
                        <div class="full-width">
                            <div class="password-group">
                                <input autocomplete="off" :type="typePassword" v-model="password" placeholder="Password" />
                                <div class="password-show" @click="showPassword(1)" v-if="typePassword==='password'">Show</div>
                                <div class="password-show" @click="showPassword(1)" v-else>Hide</div>
                            </div>
                        </div>
                        <div class="full-width">
                            <div class="password-group">
                                <input autocomplete="off" :type="typeKonfirmasi" v-model="password" placeholder="Konfirmasi Password" />
                                <div class="password-show" @click="showPassword(2)" v-if="typeKonfirmasi==='password'">Show</div>
                                <div class="password-show" @click="showPassword(2)" v-else>Hide</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-button">
                        <button type="button" @click="next === 1 ? page(2) : submit()">SELANJUTNYA</button>
                        <hr class="hr-space"/>
                        <p>Belum punya akun? <label class="link-register">Masuk</label></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>

    export default{
        data(){
            return{
                firstname: "",
                lastname: "",
                email: "",
                phone: "",
                next:1,
                typePassword: "password",
                typeKonfirmasi: "password"
            }
        },
        methods:{
            showPassword(number) {
                switch(number) {
                    case 1 : return this.typePassword = this.typePassword === "text" ? "password" : "text"; break;
                    case 2 : return this.typeKonfirmasi = this.typeKonfirmasi === "text" ? "password" : "text"; break;
                }
            },
            page(number) {
                this.next = number;
            },
            submit() {
                alert("ON PROGRESS")
            }
        }
    }
</script>
