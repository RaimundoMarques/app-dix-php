import type { HttpContextContract } from '@ioc:Adonis/Core/HttpContext'
import Application from '@ioc:Adonis/Core/Application';
import Clinica from 'App/Models/Clinica';

export default class ClinicasController {

     // método READ
     public async index() {

        const clinica = await Clinica.all()
        return {
            data: clinica
        }
    }

}
