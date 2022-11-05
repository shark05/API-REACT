import React from 'react';
import {Link} from "react-router-dom";
import {Message} from "./Message";

class DoacoesList extends React.Component {
  render() {
    const {posts} = this.props;

    if (null === posts || 0 === posts.length) {
      return (<Message message="Doaçoes não encotradas"/>);
    }

    return (
        <div className="card mb-3 mt-3 shadow-sm">
            <div className="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Valor</th>
                        <th>Forma de Pagamento</th>
                    </tr>
                </thead>
                <tbody>
                {posts && posts.map(post => (      
                    <tr>
                        <td scope="row">{post.valor}</td>
                        <td>{post.forma_pagamento}</td>
                    </tr>
                ))}
                </tbody>
                </table>
        </div>
        </div>)
  }
}

export default DoacoesList;
