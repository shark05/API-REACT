import {DOACOES_ERROR, DOACOES_RECEIVED, DOACOES_REQUEST, DOACOES_UNLOAD} from "../actions/constants";

export default (state = {
  post: null,
  isFetching: false
}, action) => {
  switch (action.type) {
    case DOACOES_REQUEST:
      return {
        ...state,
        isFetching: true
      };
    case DOACOES_RECEIVED:
      return {
        ...state,
        post: action.data,
        isFetching: false
      };
    case DOACOES_ERROR:
      return {
        ...state,
        isFetching: false
      };
    case DOACOES_UNLOAD:
      return {
        ...state,
        isFetching: false,
        post: null
      };
    default:
      return state;
  }
}
