import React from 'react';
import {Route, Switch} from "react-router";
import LoginForm from "./LoginForm";
import BlogPostListContainer from "./BlogPostListContainer";
import Header from "./Header";
import BlogPostContainer from "./BlogPostContainer";
import {requests} from "../agent";
import {connect} from "react-redux";
import {userLogout, userProfileFetch, userSetId} from "../actions/actions";
import RegistrationContainer from "./RegistrationContainer";
import BlogPostForm from "./BlogPostForm";

import DoacoesListContainer from "./DoacoesListContainer";
import DoacoesForm from "./DoacoesForm";



const mapStateToProps = state => ({
  ...state.auth
});

const mapDispatchToProps = {
  userProfileFetch, userSetId, userLogout
};

class App extends React.Component {
  constructor(props) {
    super(props);
    const token = window.localStorage.getItem('jwtToken');

    if (token) {
      requests.setToken(token);
    }
  }

  componentDidMount() {
    const userId = window.localStorage.getItem('userId');
    const {userSetId} = this.props;

    if (userId) {
      userSetId(userId);
    }
  }

  componentDidUpdate(prevProps) {
    const {userId, userData, userProfileFetch} = this.props;

    if (prevProps.userId !== userId && userId !== null && userData === null) {
      userProfileFetch(userId);
    }
  }

  render() {
    const {isAuthenticated, userData, userLogout} = this.props;

    return (
      <div>
        <Header isAuthenticated={isAuthenticated} userData={userData} logout={userLogout}/>
        <h1>Listagem de Doações</h1>
        <Switch>
          <Route path="/doacoes-form" component={DoacoesForm}/>
          <Route path="/doacoes/:id" component={DoacoesListContainer}/>
          <Route path="/:page?" component={DoacoesListContainer}/>
        </Switch>
      </div>
    )
  }
}

export default connect(mapStateToProps, mapDispatchToProps)(App);
