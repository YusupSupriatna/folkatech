import AuthService from '../services/user.service';


export const list = {
  namespaced: true,
  state: true,
  actions: {
    list({commit},param) {
        console.log(param)
      return AuthService.getPublicList(param).then(
        list => {
          return Promise.resolve(list);
        },
        error => {
          return Promise.reject(error);
        }
      );
    },

  },
  mutations: {

  }
};
