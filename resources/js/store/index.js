import { createStore } from "vuex";
import { auth } from "./auth.module";
import { list } from "./user.module";

const store = createStore({
  modules: {
    auth,
    list
  },
});

export default store;
