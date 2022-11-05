import {combineReducers} from "redux";
import doacoesList from "./reducers/doacoesList";
import doacoes from "./reducers/doacoes";

import blogPostList from "./reducers/blogPostList";
import blogPost from "./reducers/blogPost";
import commentList from "./reducers/commentList";
import {reducer as formReducer} from 'redux-form';
import auth from "./reducers/auth";
import {routerReducer} from "react-router-redux";
import registration from "./reducers/registration";
import blogPostForm from "./reducers/blogPostForm";

export default combineReducers({
  doacoesList,
  doacoes,
  blogPostList,
  blogPost,
  blogPostForm,
  commentList,
  auth,
  registration,
  router: routerReducer,
  form: formReducer
});
