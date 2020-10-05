import store from "../components/store/user";
import axios from 'axios';

export function http() {
    return axios.create({
        baseURL: store.state.apiURL
    });
} {

}
export function httpFile() {
    return axios.create({
        baseURL: store.state.apiURL
    });
} {

}
