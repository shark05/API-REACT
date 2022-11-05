import React from "react";
import {Field, reduxForm} from "redux-form";
import {connect} from "react-redux";
import {canWriteDoacoes} from "../apiUtils";
import {Redirect} from "react-router";
import {renderField} from "../form";
import {doacoesAdd, doacoesFormUnload} from "../actions/actions";

const mapDispatchToProps = {
  doacoesAdd,
  doacoesFormUnload
};

const mapStateToProps = state => ({
  userData: state.auth.userData,
  ...state.doacoesForm
});

class DoacoesForm extends React.Component {
  onSubmit(values) {
    const {doacoesAdd, reset, history} = this.props;

    return doacoesAdd(values.valor, values.forma_pagamento)
      .then(() => {
        reset();
        history.push('/');
      });
  }

  componentWillUnmount() {
    this.props.doacoesFormUnload();
  }

  render() {
    if (!canWriteDoacoes(this.props.userData)) {
      return <Redirect to="/login"/>
    }

    const {submitting, handleSubmit, error} = this.props;

    return (
      <div className="card mt-3 mb-6 shadow-sm">
        <div className="card-body">
          {error && <div className="alert alert-danger">{error}</div>}
          <form onSubmit={handleSubmit(this.onSubmit.bind(this))}>
            <Field name="title" label="Title:" type="text" component={renderField}/>
            <Field name="content" label="Content:" type="textarea" component={renderField}/>

            <button type="submit" className="btn btn-primary btn-big btn-block"
                    disabled={submitting}>
              Cadastrado!
            </button>
          </form>
        </div>
      </div>
    )
  }
}

export default reduxForm({
  form: 'DoacoesForm'
})(connect(mapStateToProps, mapDispatchToProps)(DoacoesForm))
