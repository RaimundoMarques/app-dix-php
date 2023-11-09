import type { HttpContextContract } from '@ioc:Adonis/Core/HttpContext'
import Profissional from 'App/Models/Profissional'
import Application from '@ioc:Adonis/Core/Application'


export default class ProfissionaisController {

    // método READ
    public async index() {

        const profissionais = await Profissional.all()
        return {
            data: profissionais
        }
    }

}
