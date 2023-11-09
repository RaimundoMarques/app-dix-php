import type { HttpContextContract } from '@ioc:Adonis/Core/HttpContext'
import Servico from 'App/Models/Servico';
import Application from '@ioc:Adonis/Core/Application';


export default class ServicosController {

    // método READ
    public async index() {

        const servico = await Servico.all()
        return {
            data: servico
        }
    }

}
