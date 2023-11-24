import type { HttpContextContract } from '@ioc:Adonis/Core/HttpContext'
import Produto from 'App/Models/Produto';
import Application from '@ioc:Adonis/Core/Application';


export default class ProdutosController {

    // método READ
    public async index() {

        const produto = await Produto.all()
        return {
            data: produto
        }
    }

}
