import React from 'react';
import {doacoesFetch, doacoesUnload} from "../actions/actions";
import {connect} from "react-redux";
import {Doacoes} from "./Doacoes";
import {Spinner} from "./Spinner";

const mapeStateToProps = state => ({
  ...state.doacoes
});

const mapDispatchToProps = {
  doacoesFetch,
  doacoesUnload
};

class DoacoesContainer extends React.Component {
  componentDidMount() {
    this.props.doacoesFetch(this.props.match.params.id);
  }

  componentWillUnmount() {
    this.props.doacoesUnload();
  }

  render() {
    const {isFetching, post} = this.props;

    if (isFetching) {
      return (<Spinner/>);
    }

    return (
      <div>
        <Doacoes post={post}/>
        {post}
      </div>
    )
  }
}

export default connect(mapeStateToProps, mapDispatchToProps)(DoacoesContainer);
