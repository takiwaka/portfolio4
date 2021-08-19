import "jquery-scrollify";
import "arc-text";
import load from '../pages/load'
import scroll from '../pages/scroll'
import toggle from '../pages/toggle'
import scrollify from '../pages/scrollify'


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
      default:
        break
    }
  }
}
