import React from 'react';
import timeago from 'timeago.js';
import {Message} from "./Message";

export class Doacoes extends React.Component {
  render() {
    const {post} = this.props;

    if (null === post) {
      return (<Message message="Doação não existe!"/>);
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
                    <tr>
                        <td scope="row">{post.valor}</td>
                        <td>{post.forma_pagamento}</td>
                    </tr>
                </tbody>
            </table>
        </div>
      </div>
    )
  }
}
