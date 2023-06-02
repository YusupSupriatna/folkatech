<template>
    <div class="container">
        <div class="login_card">
            <div class="card_body">
               <h3 class="title">Masuk</h3>
            </div>
            <div class="card_body">
                <Form @submit="handleLogin" :validation-schema="schema">
                    <div class="full-width">
                        <Field autocomplete="off" type="email" name="email" v-model="email" placeholder="Username / Email" />
                        <ErrorMessage name="email" class="error-feedback" />
                    </div>
                    <div class="full-width">
                        <div class="password-group">
                            <Field autocomplete="off" :type="type" name="password" v-model="password" placeholder="Password" />
                            <div class="password-show" @click="shwoPassword" v-if="type==='password'">Show</div>
                            <div class="password-show" @click="shwoPassword" v-else>Hide</div>
                        </div>
                        <ErrorMessage name="password" class="error-feedback" />
                    </div>
                    <div class="full-width text-right link-register font-weight-lighter">
                        <label class="link-register smaller">Lupa Password ?</label>
                    </div>
                    <div class="card-button">
                        <button type="submit">MASUK</button>
                        <hr class="hr-space"/>
                        <p>Belum punya akun? <router-link to="/register" class="link-register">Daftar Sekarang</router-link></p>
                    </div>
                </Form>
            </div>
        </div>
    </div>
</template>

<script>
import { Form, Field, ErrorMessage } from "vee-validate";
import * as yup from "yup";

export default {
    data(){
        return{
            email:"",
            password:"",
            type:"password"
        }
    },
  name: "Login",
  components: {
        Form,
        Field,
        ErrorMessage,
  },
  data() {
    const schema = yup.object().shape({
      email: yup.string().required("Email is required!"),
      password: yup.string().required("Password is required!"),
    });

    return {
      loading: false,
      message: "",
      schema,
    };
  },
  computed: {
    loggedIn() {
      return this.$store.state.auth.status.loggedIn;
    },
  },
  created() {
    if (this.loggedIn) {
      this.$router.push("/home");
    }
  },
  methods: {
    handleLogin(user) {
      this.loading = true;

      this.$store.dispatch("auth/login", user).then(
        () => {
          this.$router.push("/home");
        },
        (error) => {
          this.loading = false;
          this.message =
            (error.response &&
              error.response.data &&
              error.response.data.message) ||
            error.message ||
            error.toString();
        }
      );
    },
  },
};
</script>
