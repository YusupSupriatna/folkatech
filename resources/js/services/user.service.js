import axios from 'axios';
import authHeader from './atuhheader';

const API_URL = 'http://127.0.0.1:8000/api/';

class UserService {
  getPublicList(param) {
    return axios.get(API_URL + 'list-product', { headers: authHeader.authHeader(), params:param });
  }
}

export default new UserService();
