import 'slick-carousel';
import modal from '../pages/modal'
import works from '../pages/works'
import toggle from '../pages/toggle'
import pop from '../pages/pop'
import load from '../pages/load'
import scroll from '../pages/scroll'

export default class Router {
  constructor() {
    this.model = {
      pathName: location.pathname,
    }
    this.initRouting()
  }

  initRouting() {
    const pathName = this.model.pathName
    switch (pathName) {
      case '/modal':
        new modal()
        break
      case '/works':
        new works()
        break
      case '/toggle':
        new toggle()
        break
      case '/pop':
        new pop()
        break
      case '/load':
        new load()
        break
      case '/scroll':
        new scroll()
        break
      default:
        break
    }
  }
}
