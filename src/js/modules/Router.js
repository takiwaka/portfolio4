import "jquery-scrollify";
import load from '../pages/load'
import scroll from '../pages/scroll'
import toggle from '../pages/toggle'
import scrollify from '../pages/scrollify'
import pop from '../pages/pop'


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

      case '/load':
        new load()
        break
      case '/scroll':
        new scroll()
        break
      case '/toggle':
        new toggle()
        break
      case '/scrollify':
        new scrollify()
        break
      case '/pop':
        new pop()
        break
      default:
        break
    }
  }
}
