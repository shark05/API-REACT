import {
  DOACOES_LIST_REQUEST,
  DOACOES_LIST_ADD,
  DOACOES_LIST_RECEIVED,
 DOACOES_LIST_ERROR, DOACOES_LIST_SET_PAGE
} from "../actions/constants";
import {hydraPageCount} from "../apiUtils";

export default(state = {
  posts: null,
  isFetching: false,
  currentPage: 1,
  pageCount: null
}, action) => {
  switch (action.type) {
    case DOACOES_LIST_REQUEST:
      state = {
        ...state,
        isFetching: true,
      };
      return state;
    case DOACOES_LIST_RECEIVED:
      state = {
        ...state,
        posts: action.data['hydra:member'],
        pageCount: hydraPageCount(action.data),
        isFetching: false
      };
      return state;
    case DOACOES_LIST_ERROR:
      return {
        ...state,
        isFetching: false,
        posts: null
      };
    case DOACOES_LIST_ADD:
      state = {
        ...state,
        posts: state.posts ? state.posts.concat(action.data) : state.posts
      };
      return state;
    case DOACOES_LIST_SET_PAGE:
      return {
        ...state,
        currentPage: action.page
      };
    default:
      return state;
  }
}
