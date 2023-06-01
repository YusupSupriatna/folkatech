<template>
    <div class="container">
        <div class="login_card">
            <div class="card_body">
               <h3 class="title">Masuk</h3>
            </div>
            <div class="card_body">
                <form method="get" autocomplete="off">
                    <div class="full-width">
                        <input autocomplete="off" type="text" v-model="username" placeholder="Username" />
                    </div>
                    <div class="full-width">
                        <div class="password-group">
                            <input autocomplete="off" :type="type" v-model="password" placeholder="Password" />
                            <div class="password-show" @click="shwoPassword" v-if="type==='password'">Show</div>
                            <div class="password-show" @click="shwoPassword" v-else>Hide</div>
                        </div>
                    </div>
                    <div class="full-width text-right link-register font-weight-lighter">
                        <label class="link-register smaller">Lupa Password ?</label>
                    </div>
                    <div class="card-button">
                        <button>MASUK</button>
                        <hr class="hr-space"/>
                        <p>Belum punya akun? <router-link to="/register" class="link-register">Daftar Sekarang</router-link></p>
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
                username:"",
                password:"",
                type:"password"
            }
        },
        methods:{
            shwoPassword() {
                this.type = this.type === "password"?'text':'password'
            }
        }
    }
</script>
