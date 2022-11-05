import React from 'react';
import DoacoesList from "./DoacoesList";
import {doacoesListFetch, doacoesListSetPage} from "../actions/actions";
import {connect} from "react-redux";
import {Spinner} from "./Spinner";
import {Paginator} from "./Paginator";

const mapStateToProps = state => ({
  ...state.doacoesList
});

const mapDispatchToProps = {
  doacoesListFetch, doacoesListSetPage
};

class DoacoesListContainer extends React.Component {
  componentDidMount() {
    this.props.doacoesListFetch(this.getQueryParamPage());
  }

  componentDidUpdate(prevProps) {
    const {currentPage, doacoesListFetch, doacoesListSetPage} = this.props;

    if (prevProps.match.params.page !== this.getQueryParamPage()) {
      doacoesListSetPage(this.getQueryParamPage());
    }

    if (prevProps.currentPage !== currentPage) {
      doacoesListFetch(currentPage);
    }
  }

  getQueryParamPage() {
    return Number(this.props.match.params.page) || 1;
  }

  changePage(page) {
    const {history, doacoesListSetPage} = this.props;
    doacoesListSetPage(page);
    history.push(`/${page}`);
  }

  onNextPageClick(e) {
    const {currentPage, pageCount} = this.props;
    const newPage = Math.min(currentPage + 1, pageCount);
    this.changePage(newPage);
  }

  onPrevPageClick(e) {
    const {currentPage} = this.props;
    const newPage = Math.max(currentPage - 1, 1);
    this.changePage(newPage);
  }

  render() {
    const {posts, isFetching, currentPage, pageCount} = this.props;

    if (isFetching) {
      return (<Spinner/>);
    }

    return (
      <div>
        <DoacoesList posts={posts}/>
        <Paginator currentPage={currentPage} pageCount={pageCount}
                   setPage={this.changePage.bind(this)}
                   nextPage={this.onNextPageClick.bind(this)}
                   prevPage={this.onPrevPageClick.bind(this)}/>
      </div>
    )
  }
}

export default connect(mapStateToProps, mapDispatchToProps)(DoacoesListContainer);
